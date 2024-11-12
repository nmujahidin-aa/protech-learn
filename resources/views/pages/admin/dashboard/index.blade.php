@extends('layouts.app-admin')
@section('title', 'Dashboard | Protech Learn')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-4">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body">
                                <i class="ki-outline ki-people text-gray-100 fs-2x ms-n1"></i>
                                <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">{{$user->count()}}</div>
                                <div class="fw-semibold text-gray-100">User Aktif</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widget 5-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body">
                                <i class="ki-outline ki-briefcase text-white fs-2x ms-n1"></i>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">{{$team->count()}}</div>
                                <div class="fw-semibold text-white">Kelompok</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widget 5-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body">
                                <i class="ki-outline ki-chart-pie-simple text-white fs-2x ms-n1"></i>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">{{$material->count()}}</div>
                                <div class="fw-semibold text-white">Materi Tersedia</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widget 5-->
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <!--end::Footer-->
</div>
@endsection
