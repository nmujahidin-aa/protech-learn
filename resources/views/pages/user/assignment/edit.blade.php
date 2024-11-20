@extends('layouts.app')
@section('title', 'Penugasan | PROTECH')

@section('style')
<style>

.card-body {
    padding: 0; /* Kurangi padding untuk mendekatkan gambar dengan kartu */
}

.icon-pencil {
    width: 30px;
    height: 30px;
    background-color: rgba(5, 140, 250, 0.6); /* Lingkaran hitam transparan */
    border-radius: 50%; /* Membuat lingkaran */
    bottom: 20px;
    right: 20px;
    position: absolute; /* Posisi absolut di kanan atas */
    text-decoration: none;
    transition: all 0.3s ease; /* Efek animasi hover */
}

.icon-pencil:hover{
    background-color: rgba(94, 177, 255, 0.8); /* Warna lebih gelap saat hover */
    transform: scale(1.1); /* Perbesar ikon saat hover */
}

.icon-pencil i{
    font-size: 14px; /* Ukuran ikon */
}

</style>
@endsection
@section('content')
<div class="d-flex justify-content-center align-items-center" style="flex: 1; margin-top: -50px;">
    <div style="width: 75%">
        <div class="card px-2 pt-8" style="background-color: rgba(0, 0, 0, 0.4); border: 5px solid #cccccc; max-height: 75vh;">
            <div class="card-body" style="max-height: 70vh; overflow-y: auto; padding: 10px; scrollbar-width: none; -ms-overflow-style: none;">
                <div class="titlecard">
                    <div class="bg-light rounded py-3" style="border: solid 3px #cccccc;">
                        <h1 class="custom-font px-10">
                            @if ($team)
                                {{$team->name}}
                            @else
                                Belum ada kelompok
                            @endif
                        </h1>
                    </div>
                </div>

                <div class="row gy-5 py-10">
                    @if ($team)
                        <div class="d-flex align-items-center">
                            <h5 class="text-light recoleta me-2 mb-0">Anggota Kelompok:</h5>
                            @foreach ($team->members as $member)
                                <div class="symbol symbol-35px symbol-circle d-inline-block me-2" data-bs-toggle="tooltip" title="{{ $member->name }}">
                                    <span class="symbol-label bg-{{ $member->getRandomColor() }} text-inverse-{{ $member->getRandomColor() }} fw-bold">
                                        {{ substr($member->name, 0, 1) }}
                                    </span>
                                </div>
                            @endforeach
                        </div>

                        <div class="row mt-5">
                            @for ($i = 1; $i <= 4; $i++)
                                @php
                                    $currentAssignment = $assignment->firstWhere('gathering', $i); // Cek apakah gathering sudah ada
                                @endphp
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="card border-dashed h-100">
                                        <div class="card-body position-relative d-flex justify-content-center align-items-center p-2">
                                            @if ($currentAssignment)
                                                <!-- Gambar -->
                                                <img src="{{ asset('storage/' . $currentAssignment->image) }}" alt="Assignment Image" class="img-fluid rounded">

                                                <!-- Ikon pensil di pojok kanan atas -->
                                                <a href="#" class="position-absolute icon-pencil d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modal-{{ $i }}">
                                                    <i class="fas fa-pencil-alt text-white"></i>
                                                </a>
                                            @else
                                                <!-- Tampilkan ikon tambah -->
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-{{ $i }}">
                                                    <i class="fas fa-plus-circle text-primary" style="font-size: 3rem;"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <p class="text-center mt-2 text-dark recoleta">Pertemuan {{$i}}</p>
                                    </div>
                                </div>



                                <!-- Modal -->
                                <div class="modal fade" id="modal-{{ $i }}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="POST" action="{{ route('assignment.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="team_id" value="{{ $id }}">
                                            <input type="hidden" name="gathering" value="{{ $i }}">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel">Pertemuan {{ $i }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Upload Gambar</label>
                                                        <input type="file" class="form-control" id="image" name="image">
                                                        @if ($currentAssignment && $currentAssignment->image)
                                                            <p class="mt-2">Gambar saat ini: <a href="{{ asset('storage/' . $currentAssignment->image) }}" target="_blank">Lihat</a></p>
                                                        @endif
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Deskripsi</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3">{{ $currentAssignment->description ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endfor
                        </div>



                    @else
                        <p class="text-center text-light recoleta">-- Belum ada kelompok --</p>
                    @endif
                    </div>

                <div class="d-flex justify-content-center" style="position: absolute; bottom: -25px; right: 10px;">
                    <a href="{{route('assignment.index')}}" class="circlebutton">
                        <i class="ki-solid ki-left fs-1 text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
