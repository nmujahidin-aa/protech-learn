@extends('layouts.app')
@section('title', 'Evaluasi | PROTECH')
@section('style')
<style>
    body, html {
        margin: 0;
        padding: 0;
        overflow: hidden; /* Hapus scrollbar dari body */
        height: 100%;
    }
    iframe {
        width: 100vw;
        height: 100vh;
        border: none;
    }
</style>
@endsection
@section('content')
<div class="d-flex justify-content-center align-items-center" style="flex: 1; margin-top: -50px;">
    <div style="width: 95%">
        <div class="card px-2 pt-8" style="background-color: rgba(0, 0, 0, 0.4); border: 5px solid #cccccc; max-height: 100%;">
            <div class="card-body" style="max-height: 70vh; overflow-y: auto; padding: 10px; scrollbar-width: none; -ms-overflow-style: none;">
                <div>
                    <iframe src="https://protech-game.netlify.app" frameborder="0"></iframe>
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
