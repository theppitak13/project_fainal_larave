<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('postpage', function () {
    return view('postpage');
});
Route::get('form', function () {
    return view('form');
});
Route::get('listpost', function () {
    return view('listpost');
})->name('listpost');

Route::get('/', [PostController::class, 'pullData']);
Route::get('listpost', [PostController::class, 'pullDataList']);
Route::get('postPageId/{id}', [PostController::class, 'pullDataIdPost'])->name('postPageId');

Route::post('uploadData', [PostController::class, 'uploadData'])->name('uploadData');
//Delete
Route::get('deleteData/{id}', [PostController::class, 'deleteData'])->name('deleteData');
//Edit
Route::get('editData/{id}', [PostController::class, 'editData'])->name('editData');
//Update
Route::post('updateData/{id}', [PostController::class, 'updateData'])->name('updateData');

