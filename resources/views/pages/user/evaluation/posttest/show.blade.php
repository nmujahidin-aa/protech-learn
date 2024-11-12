@extends('layouts.app')
@section('title', 'Evaluasi | PROTECH')
@section('style')
<style>
    img{
        max-width: 100%;
        height: auto;
    }
</style>
@endsection
@section('content')
<div class="d-flex justify-content-center align-items-center" style="flex: 1; margin-top: -50px;">
    <div style="width: 90%">
        <div class="card" style="background-color: rgba(0, 0, 0, 0.9); border: 5px solid #cccccc; max-height: 75%;">
            <div class="card-body" style="max-height: 80vh; overflow-y: auto; padding: 10px; scrollbar-width: none; -ms-overflow-style: none;">
                {{-- <div class="titlecard">
                    <div class="bg-light rounded py-3" style="border: solid 3px #cccccc;"><h1 class="custom-font px-10">Pretest</h1></div>
                </div> --}}

                <div class="row g-1">
                    <!--begin::Col-->
                    <form action="{{ $questionNumber < $questions->count() ? route('evaluation.posttest.saveAnswer') : route('evaluation.posttest.submit') }}" method="POST" class="bg-primary rounded">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="bg-primary py-10">
                            <div class="container">
                                <h3 class="text-white flex mb-5 fw-bold">Soal Nomor {{ $questionNumber }} dari {{ $questions->count() }}</h3>
                                <input type="hidden" name="question_number" value="{{ $questionNumber }}">
                                <span class="text-light fs-4">{!! $question->question !!}</span>
                            </div>
                        </div>

                        <div class="navbar navbar-expand-md navbar-list navbar-light bg-light border-bottom-2" style="white-space: nowrap;">
                            <div class="container page_container">
                                <ul class="nav navbar-nav flex navbar-list__item">
                                    <li class="nav-item">
                                        <i class="bi bi-tune text-50 mr-8pt"></i>
                                        Pilih salah satu jawaban yang benar
                                    </li>
                                </ul>
                                <div class="nav navbar-nav ml-sm-auto navbar-list__item">
                                    <div class="row justify-content-between ml-sm-16pt">
                                        <div class="col-auto">
                                            <button type="submit" name="previous" class="btn btn-light-primary">Sebelumnya</button>
                                        </div>
                                        <div class="col-auto">
                                            @if($questionNumber < $questions->count())
                                                <button type="submit" class="btn btn-accent">Selanjutnya</button>
                                            @else
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container pb-10">
                            <div class="page-section">
                            @if(session('alert'))
                            <!--begin::Alert-->
                            <div class="alert alert-dismissible bg-light-warning d-flex flex-column flex-sm-row p-5 mt-5">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-notification-bing fs-2hx text-warning me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                    <!--begin::Title-->
                                    <h4 class="fw-semibold">Perhatian !!</h4>
                                    <!--end::Title-->

                                    <!--begin::Content-->
                                    <span>{{session('alert')}}</span>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Close-->
                                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                    <i class="ki-duotone ki-cross fs-1 text-warning"><span class="path1"></span><span class="path2"></span></i>
                                </button>
                                <!--end::Close-->
                            </div>
                            <!--end::Alert-->
                            @endif
                            <div class="fw-bold pt-10">
                                <h4>Jawaban anda</h4>
                            </div>

                            <div class="form-group mb-10">
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-radio">
                                        <input id="option_a" name="answer" type="radio" class="custom-control-input" value="a"
                                            {{ session('answers.' . $questionNumber) == 'a' ? 'checked' : '' }}>
                                        <label for="option_a" class="custom-control-label">{{ $question->option_a }}</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input id="option_b" name="answer" type="radio" class="custom-control-input" value="b"
                                            {{ session('answers.' . $questionNumber) == 'b' ? 'checked' : '' }}>
                                        <label for="option_b" class="custom-control-label">{{ $question->option_b }}</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="option_c" name="answer" type="radio" class="custom-control-input" value="c"
                                            {{ session('answers.' . $questionNumber) == 'c' ? 'checked' : '' }}>
                                        <label for="option_c" class="custom-control-label">{{ $question->option_c }}</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="option_d" name="answer" type="radio" class="custom-control-input" value="d"
                                            {{ session('answers.' . $questionNumber) == 'd' ? 'checked' : '' }}>
                                        <label for="option_d" class="custom-control-label">{{ $question->option_d }}</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="option_e" name="answer" type="radio" class="custom-control-input" value="e"
                                            {{ session('answers.' . $questionNumber) == 'e' ? 'checked' : '' }}>
                                        <label for="option_e" class="custom-control-label">{{ $question->option_e }}</label>
                                    </div>
                                </div>
                            </div>

                            <p class="text-50 mb-0">Note: Tetap semangat.</p>
                            </div>
                        </div>
                    </form>
                    <!--end::Col-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
