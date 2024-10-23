@extends('layouts.app-admin')
@section('title', 'Soal Evaluasi | PROTECH')

@section('content')

<div class="container px-10 py-5">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <h1 class="page-header-title">Soal Evaluasi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('dashboard.dashboard.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item text-muted" aria-current="page">Soal Evaluasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="separator my-5"></div>

    <div class="row">
        @for ($i = 1; $i <= 4; $i++)
        <div class="col-md-3 col-12">
            <div class="card h-lg-100" style="background: linear-gradient(112.14deg, #FF8A00 0%, #E96922 100%)">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-12 pe-0 mb-5 mb-sm-0">
                            <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                <div class="mb-7">
                                    <div class="mb-6">
                                        <h3 class="fs-2x fw-semibold text-white">Pretest</h3>
                                        <span class="fw-semibold text-white opacity-75">Paket {{$i}}</span>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
                                                    <i class="ki-outline ki-abstract-26 fs-4 text-white"></i>
                                                </span>
                                            </div>
                                            <div class="m-0">
                                                <a href="" class="text-white text-opacity-75 fs-8">Soal</a>
                                                <!-- Menampilkan jumlah soal untuk pretest -->
                                                <span class="fw-bold text-white fs-7 d-block">{{ $pretestCounts[$i] }} Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-0">
                                    <a href="{{route('dashboard.evaluation.pretest.index', $i)}}" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <div class="row mt-4">
        @for ($i = 1; $i <= 4; $i++)
        <div class="col-md-3 col-12">
            <div class="card h-lg-100" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-12 pe-0 mb-5 mb-sm-0">
                            <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                <div class="mb-7">
                                    <div class="mb-6">
                                        <h3 class="fs-2x fw-semibold text-white">Posttest</h3>
                                        <span class="fw-semibold text-white opacity-75">Paket {{$i}}</span>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
                                                    <i class="ki-outline ki-abstract-26 fs-4 text-white"></i>
                                                </span>
                                            </div>
                                            <div class="m-0">
                                                <a href="" class="text-white text-opacity-75 fs-8">Soal</a>
                                                <!-- Menampilkan jumlah soal untuk posttest -->
                                                <span class="fw-bold text-white fs-7 d-block">{{ $posttestCounts[$i] }} Soal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-0">
                                    <a href="{{route('dashboard.evaluation.posttest.index', $i)}}" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

</div>
@endsection

@section('scripts')
@endsection
