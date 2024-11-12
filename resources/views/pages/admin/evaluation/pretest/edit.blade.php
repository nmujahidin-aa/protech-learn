@extends('layouts.app-admin')
@section('title')
    {{ isset($questions) ? 'Ubah Soal: ' : 'Tambah Soal' }}
@endsection

@section('content')
<div class="container px-10 py-5">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <h1 class="page-header-title">Soal Evaluasi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('dashboard.dashboard.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('dashboard.evaluation.index')}}">Soal Evaluasi</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('dashboard.evaluation.pretest.index', $id)}}">Paket {{$id}}</a></li>
                        <li class="breadcrumb-item text-muted" aria-current="page">Tambah</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="separator my-5"></div>
    <div class="card">
        <form action="{{route('dashboard.evaluation.pretest.store')}}" method="POST">
            @csrf
            @if (isset($questions))
                <input type="hidden" name="id" value="{{ $questions->id }}" autocomplete="off">
            @endif
            <div class="card-header">
                <div class="pt-6">
                    <h5 class="mb-0">Materi</h5>
                    <p class="text-gray-500">Silakan isi setiap kolom dengan teliti dan informasi yang benar.</p>

                </div>
            </div>
            <div class="card-body">
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Pertanyaan <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <textarea name="question" class="form-control @error('question') is-invalid @enderror" id="question" rows="5" placeholder="">
                            {{ old('question') ? old('question') : (isset($questions) ? $questions->question : '') }}
                        </textarea>
                        <div class="invalid-feedback">
                            @error('question')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Opsi A --}}
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Opsi A <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" name="option_a" class="form-control @error('option_a') is-invalid @enderror" id="option_a" value="{{ old('option_a') ? old('option_a') : (isset($questions) ? $questions->option_a : '') }}">
                        <div class="invalid-feedback">
                            @error('option_a')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Opsi B --}}
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Opsi B <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" name="option_b" class="form-control @error('option_b') is-invalid @enderror" id="option_b" value="{{ old('option_b') ? old('option_b') : (isset($questions) ? $questions->option_b : '') }}">
                        <div class="invalid-feedback">
                            @error('option_b')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Opsi C --}}
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Opsi C <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" name="option_c" class="form-control @error('option_c') is-invalid @enderror" id="option_c" value="{{ old('option_c') ? old('option_c') : (isset($questions) ? $questions->option_c : '') }}">
                        <div class="invalid-feedback">
                            @error('option_c')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Opsi D --}}
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Opsi D <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" name="option_d" class="form-control @error('option_d') is-invalid @enderror" id="option_d" value="{{ old('option_d') ? old('option_d') : (isset($questions) ? $questions->option_d : '') }}">
                        <div class="invalid-feedback">
                            @error('option_d')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Opsi E --}}
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Opsi E <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" name="option_e" class="form-control @error('option_e') is-invalid @enderror" id="option_e" value="{{ old('option_e') ? old('option_e') : (isset($questions) ? $questions->option_e : '') }}">
                        <div class="invalid-feedback">
                            @error('option_e')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Correct Option --}}
                <div class="form-group row mb-3">
                    <label class="col-md-2 col-form-label">Jawaban Benar <span class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" name="correct_answer" class="form-control @error('correct_answer') is-invalid @enderror" id="correct_answer" value="{{ old('correct_answer') ? old('correct_answer') : (isset($questions) ? $questions->correct_answer : '') }}" placeholder="Hanya tulis 'a, b, c, d atau e'">
                        <div class="invalid-feedback">
                            @error('correct_answer')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <input type="hidden" value="pre_{{$id}}" name="packet">

            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary"> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.querySelectorAll('#question').forEach(element => {
        ClassicEditor
            .create(element, {
                ckfinder: {
                    uploadUrl: "{{ route('dashboard.introduction.upload', ['_token' => csrf_token()]) }}"
                }
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
