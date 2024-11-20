<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Comment;
use App\Models\Like;
use App\Http\Requests\User\AssignmentRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AssignmentController extends Controller
{
    private $view;
    private $route;
    private $assignment;
    private $comment;
    private $like;
    public function __construct(){
        $this->view = "pages.user.assignment.";
        $this->route = "assignment.";
        $this->assignment = new Assignment();
        $this->comment = new Comment();
        $this->like = new Like();
    }

    public function index(){
        $assignment = $this->assignment::first();

        $user = Auth::id();
        $team_id = DB::table('team_user')
                    ->where('user_id', $user)
                    ->value('team_id');
        if ($team_id) {
            $id = $team_id;
        } else {
            $id = null;
        }

        return view($this->view.'index', [
            'id' => $id,
            'assignment' => $assignment,
        ]);
    }

    public function explore(){
        $assignment = Assignment::with(['team', 'likes', 'comments'])
            ->orderBy('gathering', 'asc')
            ->get()
            ->groupBy('gathering');
        $comment = $this->comment::all();
        return view($this->view."explore",[
            'assignment' => $assignment,
            'comment' => $comment,
        ]);
    }

    public function comment(Request $request){
        $request->validate([
            'assignment_id' => 'required|exists:assignments,id',
            'content' => 'required|string|max:255',
        ]);

        // Create a new comment
        Comment::create([
            'assignment_id' => $request->assignment_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        // Redirect back or return a response
        return back()->with('success', 'Comment added successfully.');
    }

    public function like(Request $request, $id)
    {
        $assignment = $this->assignment::findOrFail($id);
        $user = auth()->user();

        $like = $assignment->likes()->where('user_id', $user->id)->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            $assignment->likes()->create(['user_id' => $user->id]);
            $liked = true;
        }

        return response()->json([
            'liked' => $liked
        ]);
    }

    public function edit(string $id = null)
    {
        $team = auth()->user()->teams()->first(); // Ambil tim pertama user
        $members = $team ? $team->members()->get() : []; // Ambil anggota tim
        $assignment = $this->assignment::where('team_id', $id)->get(); // Ambil data berdasarkan team_id

        return view($this->view . 'edit', [
            'team' => $team,
            'members' => $members,
            'id' => $id,
            'assignment' => $assignment,
        ]);
    }

    public function store(AssignmentRequest $request)
    {
        // Menyiapkan path gambar default
        $filePath = null;

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            $id = $request->team_id;
            $file = $request->file('image');
            $fileName = 'poster_kelompok_' . $id . '_' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('assignment', $fileName, 'public'); // Menyimpan file ke folder assignment
        }

        // Ambil data yang sudah tervalidasi
        $data = $request->validated();

        // Cek apakah assignment dengan team_id yang sama sudah ada
        $existingAssignment = $this->assignment::where('team_id', $request->team_id)
            ->where('gathering', $request->gathering)  // Pastikan gathering juga diperiksa
            ->first();

        if ($existingAssignment) {
            // Jika sudah ada, lakukan update
            $assignment = $this->assignment::findOrFail($existingAssignment->id);

            // Jika file baru diupload, hapus file lama
            if ($filePath !== null) {
                // Cek dan hapus gambar lama jika ada
                if ($assignment->image && Storage::exists('public/' . $assignment->image)) {
                    Storage::delete('public/' . $assignment->image);
                }
                $data['image'] = $filePath; // Gunakan file yang baru
            } else {
                // Jika tidak ada file baru, tetap gunakan gambar lama
                $data['image'] = $assignment->image;
            }

            // Update data assignment
            $assignment->update($data);

            alert()->html('Berhasil', 'Data berhasil diperbarui', 'success');
        } else {
            // Jika tidak ada, buat assignment baru
            $data['image'] = $filePath;
            $data['team_id'] = $request->team_id;
            $data['description'] = $request->description;
            $data['gathering'] = $request->gathering;

            $this->assignment::create($data);

            alert()->html('Berhasil', 'Data berhasil ditambahkan', 'success');
        }

        return redirect()->route($this->route.'edit', $request->team_id);
    }

}
