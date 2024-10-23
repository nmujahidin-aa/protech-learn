@extends('layouts.app-admin')
@section('title', 'Soal Evaluasi | PROTECH')
@section('style')
<style>
    img {
        max-width: 100%;
        height: auto;
    }
</style>
@endsection
@section('content')

<div class="container px-10 py-5">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <h1 class="page-header-title">Soal Pretest</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('dashboard.dashboard.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('dashboard.evaluation.index')}}">Soal Evaluasi</a></li>
                        <li class="breadcrumb-item text-muted" aria-current="page">Pretest Paket {{$id}}</li>
                    </ol>
                </nav>
            </div>

            <div class="col-auto">
                <a class="btn btn-primary" href="{{route('dashboard.evaluation.pretest.edit', $id)}}">
                    <i class="ki-solid ki-plus-square  fs-2"></i> Tambah
                </a>
            </div>
        </div>
    </div>
    <div class="separator my-5"></div>

    <div class="card">
        <div class="card body">
            <div class="p-5 pt-10">
                @if ($questions->count() > 0)
                    @foreach ($questions as $index => $row)
                    <div class="d-flex justify-content-between align-items-start mb-5">
                        <div class="d-flex ">

                            <div class="symbol symbol-30px symbol-circle me-3">
                                <span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
                                    <span><h4>{{$index + 1}}</h4></span>
                                </span>
                            </div>
                            <div>
                                <a href="{{route('dashboard.evaluation.pretest.edit', [$id, $row->id])}}" class="text-dark text-hover-primary fs-6 fw-bolder">{!! $row->question !!}</a>
                                <div>
                                    <span class="{{ $row->correct_answer == 'a' ? 'text-success' : 'text-muted' }} fs-6">A. {{$row->option_a}}</span><br>
                                    <span class="{{ $row->correct_answer == 'b' ? 'text-success' : 'text-muted' }} fs-6">B. {{$row->option_b}}</span><br>
                                    <span class="{{ $row->correct_answer == 'c' ? 'text-success' : 'text-muted' }} fs-6">C. {{$row->option_c}}</span><br>
                                    <span class="{{ $row->correct_answer == 'd' ? 'text-success' : 'text-muted' }} fs-6">D. {{$row->option_d}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-icon btn-bg-light btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h fs-3"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="{{route('dashboard.evaluation.pretest.edit', [$id, $row->id])}}">
                                        <i class="fa fa-edit me-2"></i> Edit
                                    </a>
                                </li>
                                <li>
                                    <form action="{{route('dashboard.evaluation.pretest.delete', $row->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item">
                                            <i class="fa fa-trash me-2"></i> Hapus
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="separator my-5"></div>
                    @endforeach
                @else
                <div class="text-center">
                    <img src="assets/media/illustrations/empty.svg" class="mw-100 mh-300px" alt="">
                    <h4 class="mt-5">Belum ada soal</h4>
                    <p class="text-gray-500">Silakan tambahkan soal evaluasi untuk paket ini.</p>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
@endsection
