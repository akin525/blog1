<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/logout', function () {
    Auth::logout();
    return view('auth.login');
});
Route::view('wp-admin', 'auth.login');
Route::post('wp', [HomeController::class, 'enteradmin'])->name('wp');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');


Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('add-post', [\App\Http\Controllers\PostController::class, 'loadpostcreate'])->name('add-post');
    Route::post('posta', [\App\Http\Controllers\PostController::class, 'createpost'])->name('posta');

    Route::get('add-category', [\App\Http\Controllers\CategoryController::class, 'indexcreate'])->name('add-category');
    Route::post('cate', [\App\Http\Controllers\CategoryController::class, 'createcat'])->name('cate');
    Route::get('allpost', [\App\Http\Controllers\PostController::class, 'getallpost'])->name('allpost');
    Route::get('allcomment', [\App\Http\Controllers\CommentController::class, 'allcomment'])->name('allcomment');
    Route::get('allcategory', [\App\Http\Controllers\CategoryController::class, 'allcategory'])->name('allcategory');

    Route::get('editpost/{id}', [\App\Http\Controllers\PostController::class, 'editpost'])->name('editpost');
    Route::post('updatepost', [\App\Http\Controllers\PostController::class, 'updatepost'])->name('updatepost');

    Route::get('editcategory{id}', [\App\Http\Controllers\CategoryController::class, 'editcategory'])->name('editcategory');
    Route::post('updatecategory', [\App\Http\Controllers\CategoryController::class, 'updatecategory'])->name('updatecategory');

});
Route::post('postcomment', [\App\Http\Controllers\CommentController::class, 'commentpost'])->name('postcomment');
Route::get('/', [HomeController::class, 'indexhome'])->name('home');
Route::get('cat/{id}', [\App\Http\Controllers\CategoryController::class, 'entercat'])->name('cat');
Route::get('details/{id}', [HomeController::class, 'detailsindex'])->name('details');
Route::get('/poimg/{filename}', function ($filename) {
    $path = storage_path('app/poimg/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('poimg');
Route::get('/cat1/{filename}', function ($filename) {
    $path = storage_path('app/cat1/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('cat1');
