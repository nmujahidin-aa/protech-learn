<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\RouteHelper;
use App\Http\Controllers\Admin\IntroductionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\WorksheetController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\AssignmentController;
use App\Http\Controllers\Admin\EvaluationController;
use App\Http\Controllers\Admin\PretestController;
use App\Http\Controllers\Admin\PosttestController;


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Route ini telah didaftarkan dalam **RouteServiceProvider** dengan konfigurasi khusus sebagai berikut:
| - **Prefix**: `dashboard`
| - **As**: `dashboard.`
| - **Namespace**: `Admin`
|
| Route ini mengarahkan langsung ke Controller yang berada di dalam folder **Admin**.
| Dengan menggunakan pengaturan ini, semua route yang didefinisikan akan otomatis memiliki prefix `dashboard` dan dapat diakses dengan nama alias yang dimulai dengan `dashboard.`
| Contohnya, `dashboard.index` akan merujuk pada method `index` dalam Controller yang sesuai di namespace **Admin**.
| Pengaturan ini memudahkan pengelolaan dan akses route secara terstruktur dalam aplikasi Anda.
|
*/


Route::get('/', "DashboardController@index")->name('dashboard.index');

RouteHelper::make('user', 'user', UserController::class);
RouteHelper::make('material', 'material', MaterialController::class);
Route::group(["prefix"=>"material", "as"=>"material."], function(){
    Route::post('/upload', [MaterialController::class, 'upload'])->name('upload');
    Route::get('/{id}', [MaterialController::class, 'content'])->name('content');
});
RouteHelper::make('introduction', 'introduction', IntroductionController::class);
Route::post('/upload', [IntroductionController::class, 'upload'])->name('introduction.upload');

RouteHelper::make('video', 'video', VideoController::class);
RouteHelper::make('worksheet', 'worksheet', WorksheetController::class);
RouteHelper::make('team', 'team', TeamController::class);

RouteHelper::make('assignment', 'assignment', AssignmentController::class);
RouteHelper::make('evaluation', 'evaluation', EvaluationController::class);
Route::group(["prefix"=>"evaluation", "as"=>"evaluation."], function(){
    Route::group(["prefix"=>"pretest", "as"=>"pretest."], function(){
        Route::get('/{id}', [PretestController::class, 'pretest'])->name('index');
        Route::post('/store', [PretestController::class, 'storePretest'])->name('store');
        Route::get('/{id}/edit/{ids?}', [PretestController::class, 'editPretest'])->name('edit');
        Route::post('/update/{id}', [PretestController::class, 'updatePretest'])->name('update');
        Route::delete('/delete/{id}', [PretestController::class, 'deletePretest'])->name('delete');
        Route::post('/upload', [PretestController::class, 'upload'])->name('upload');
    });
    Route::group(["prefix"=>"posttest", "as"=>"posttest."], function(){
        Route::get('/{id}', [PosttestController::class, 'posttest'])->name('index');
        Route::post('/store', [PosttestController::class, 'storePosttest'])->name('store');
        Route::get('/{id}/edit/{ids?}', [PosttestController::class, 'editPosttest'])->name('edit');
        Route::post('/update/{id}', [PosttestController::class, 'updatePosttest'])->name('update');
        Route::delete('/delete/{id}', [PosttestController::class, 'deletePosttest'])->name('delete');
    });
});


