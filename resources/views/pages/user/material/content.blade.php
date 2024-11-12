@extends('layouts.app')
@section('title', 'PROTECH')
@section('style')
<style>
    img{
        max-width: 100%;
        height: auto;
    }
</style>
@section('content')
<div class="d-flex justify-content-center align-items-center" style="flex: 1; margin-top: -50px;">
    <div style="width: 90%">
        <div class="card px-2 pt-8" style="background-color: rgba(255, 255, 255, 0.7); border: 5px solid #cccccc; height: 75%;">
            <div class="card-body" style="max-height: 70vh; overflow-y: auto; padding: 10px; scrollbar-width: none; -ms-overflow-style: none;">
                {{-- <div class="titlecard">
                    <div class="btn btn-light" style="border: solid 3px #cccccc;"><h1 class="custom-font px-10">Materi</h1></div>
                </div> --}}
                @if ($material)
                    <div class="card p-5 recoleta text-light" style="background-color: #9945d6;">{{$material->title}}</div>
                    <div class="row pt-2">
                        <div class="col-md-3 col-12">
                            <div class="card">
                                <div class="card-body">
                                    {{$material->question}}
                                </div>
                            </div>
                            <div class="card mt-3 mb-3">
                                <div class="card-body">
                                    {{$material->insight}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <div class="card">
                                <div class="card-body">
                                    {!! $material->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4 class="recoleta" style="color: #9945d6">Ringkasan</h4>
                            {!! $material->summary !!}
                        </div>
                    </div>
                @else
                <div class="col-12">
                    <div class="text-center pt-10">
                        <h1 class="text-light recoleta">-- Belum ada Materi yang ditambahkan --</h1>
                      </div>
                  </div>
                @endif
            </div>

            <div class="container" style="position: relative;">
                <div class="d-flex justify-content-between align-items-center" style="position: absolute; bottom: -45px; width: 100%;">
                    @if ($previousMaterial)
                        <a href="{{ route('material.content', $previousMaterial->id) }}" class="circlebutton">
                            <i class="ki-solid ki-left fs-1 text-light"></i>
                        </a>
                    @else
                        <!-- Spacer div to keep layout centered -->
                        <div style="width: 50px;"></div>
                    @endif

                    <a href="{{ route('material.index') }}" class="circlebutton" style="margin: auto;">
                        <i class="ki-solid ki-home fs-1 text-light"></i>
                    </a>

                    @if ($nextMaterial)
                        <a href="{{ route('material.content', $nextMaterial->id) }}" class="circlebutton">
                            <i class="ki-solid ki-right fs-1 text-light"></i>
                        </a>
                    @else
                        <!-- Spacer div to keep layout centered -->
                        <div style="width: 50px;"></div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
