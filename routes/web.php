<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\CarouselController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ CarouselController::class,'index' ] );
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('dropzone', [DropzoneController::class, 'dropzone']);
Route::post('dropzone/store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');
Route::get('carousel/{id}', [CarouselController::class, 'show'])->name('carousel.show');
