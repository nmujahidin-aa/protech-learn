<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/webhook-receiver', [WebhookController::class, 'handle']);
Route::get('/', function () {
    return view('pages.user.guest');
});

Route::group(["namespace" => "App\Http\Controllers\User", "middleware"=>"auth"], function(){
    Route::group(["prefix"=>"home", "as"=>"home.", ], function(){
        Route::get("/", "HomeController@index")->name("index");
    });

    Route::group(["prefix"=>"introduction", "as"=>"introduction."], function(){
        Route::get("/", "IntroductionController@index")->name('index');
        Route::get("/learning-objectives", "IntroductionController@learningObjectives")->name('learning-objectives');
        Route::get("/guide", "IntroductionController@guide")->name('guide');
        Route::get("/stage", "IntroductionController@stage")->name('stage');
    });

    Route::group(["prefix"=>"evaluation", "as"=>"evaluation."], function(){
        Route::get("/", "EvaluationController@index")->name('index');
        Route::get("/pretest", "EvaluationController@pretest")->name('pretest');

        Route::group(["prefix"=>"pretest", "as"=>"pretest."], function(){
            Route::get("/{id}", "PretestController@index")->name('index');
            Route::get('/{id}/result', 'PretestController@result')->name('result');
            Route::post('/save-answer', 'PretestController@saveAnswer')->name('saveAnswer');
            Route::post('/submit', 'PretestController@submit')->name('submit');
            Route::get('/{id}/{questionNumber?}', 'PretestController@show')->name('show');

        });
        Route::get("/posttest", "EvaluationController@posttest")->name('posttest');
        Route::group(["prefix"=>"posttest", "as"=>"posttest."], function(){
            Route::get("/{id}", "PosttestController@index")->name('index');
            Route::get('/{id}/result', 'PosttestController@result')->name('result');
            Route::post('/save-answer', 'PosttestController@saveAnswer')->name('saveAnswer');
            Route::post('/submit', 'PosttestController@submit')->name('submit');
            Route::get('/{id}/{questionNumber?}', 'PosttestController@show')->name('show');

        });
        Route::get("/game", "EvaluationController@game")->name('game');
        Route::get("/games", "EvaluationController@game2")->name('game2');
    });

    Route::group(["prefix"=>"material", "as"=>"material."], function(){
        Route::get("/", "MaterialController@index")->name('index');
        Route::get("/{id}", "MaterialController@content")->name('content');
    });

    Route::group(["prefix"=>"worksheet", "as"=>"worksheet."], function(){
        Route::get("/", "WorksheetController@index")->name('index');
        Route::get("/edit/{id?}", "WorksheetController@edit")->name('edit');
        Route::post("/", "WorksheetController@store")->name('store');
    });

    Route::group(["prefix"=>"video", "as"=>"video."], function(){
        Route::get("/", "VideoController@index")->name('index');
    });

    Route::group(["prefix"=>"sdgs", "as"=>"sdgs."], function(){
        Route::get("/", "SdgsController@index")->name('index');
    });

    Route::group(["prefix"=>"reference", "as"=>"reference."], function(){
        Route::get("/", "ReferenceController@index")->name('index');
    });

    Route::group(["prefix"=>"assignment", "as"=>"assignment."], function(){
        Route::get("/", "AssignmentController@index")->name('index');
        Route::post("/", "AssignmentController@store")->name( 'store');
        Route::post("/comment", "AssignmentController@comment")->name( 'comment');
        Route::get("/edit/{id?}", "AssignmentController@edit")->name("edit");
        Route::get("/explore", "AssignmentController@explore")->name("explore");
        Route::post("/{id}/like", "AssignmentController@like")->name( 'like');
    });
});

