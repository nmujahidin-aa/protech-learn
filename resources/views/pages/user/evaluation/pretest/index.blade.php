@extends('layouts.app')
@section('title', 'Evaluasi | PROTECH')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="flex: 1; margin-top: -50px;">
    <div style="width: 90%">
        <div class="card px-2 pt-8" style="background-color: rgba(0, 0, 0, 0.4); border: 5px solid #cccccc; max-height: 75%;">
            <div class="card-body" style="max-height: 70vh; overflow-y: auto; padding: 10px; scrollbar-width: none; -ms-overflow-style: none;">
                <div class="titlecard">
                    <div class="bg-light rounded py-3" style="border: solid 3px #cccccc;"><h1 class="custom-font px-10">Pretest</h1></div>
                </div>

                <div class="row g-3 mb-5">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::Engage widget 3-->
                        <div class="card h-md-100" data-bs-theme="light" style="background-image: url('{{ asset('assets/media/misc/auth-bg.png') }}');">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column pt-13 pb-14">
                                <!--begin::Heading-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-white text-center mb-0" style="font-size: 40px;">Paket {{$id}}</h1>
                                    <br/>
                                    <div class="text-center">
                                        <span class="fw-bolder text-white mb-0">Silahkan untuk </span>
                                        <br>
                                        <span class="fw-normal text-white mb-0">memulai pre test paket {{$id}} ini</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Illustration-->
                                    <div class="flex-grow-1 d-flex justify-content-center align-items-center bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-150px mh-150px my-5 mb-lg-12">
                                        <div style="font-size: 20vh; font-weight: bold; background: linear-gradient(112.14deg, #fff 50%, #f9f9f9 50%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;">
                                            {{-- {{$startLevel}} --}} --
                                        </div>
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Links-->
                                <div class="text-center">
                                    <!--begin::Link-->

                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a class="btn btn-sm bg-white btn-color-white bg-opacity-20" href="{{route('evaluation.pretest.show', [$id, $questionNumber])}}">Mulai Test</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-8 mb-5 mb-xl-10">
                        <!--begin::Chart widget 11-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Silahkan melakukan pretest</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6"></span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pb-0 pt-4">
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade active show" id="kt_chart_widget_11_tab_content_3" role="tabpanel">
                                        <!--begin::Statistics-->
                                        <div class="mb-2">
                                            <!--begin::Statistics-->
                                            <span class="fs-2hx fw-bold d-block text-gray-800 me-2 mb-2 lh-1 ls-n2"></span>
                                            <!--end::Statistics-->
                                            <!--begin::Description-->
                                            <span class="fs-6 fw-semibold text-gray-500">Jangan lupa <b>berdoa</b> sebelum mengerjakan pre test.</span><br>
                                            <span class="fs-6 fw-semibold text-gray-500">Selamattt Mengerjakan!!</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Chart-->
                                        <div id="kt_charts_widget_11_chart_3" class="ms-n5 me-n3 min-h-auto mb-5 d-flex justify-content-center align-items-center bg-light-primary" style="height: 300px">
                                            <img src="{{URL::TO('/')}}/assets/image/icon/test.svg" style="width: 30%;">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 11-->
                    </div>
                    <!--end::Col-->
                </div>

                <div class="d-flex justify-content-center" style="position: absolute; bottom: -25px; right: 10px;">
                    <a href="{{route('evaluation.index')}}" class="circlebutton">
                        <i class="ki-solid ki-left fs-1 text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
