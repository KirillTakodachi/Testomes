<?php

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

Route::get('/', [\App\Http\Controllers\MenuController::class , 'index'])->name('home/index');

Route::get('/modal',            [\App\Http\Controllers\ModalController::class, 'view'])->name('form.view');
Route::post('/modal/create',    [\App\Http\Controllers\ModalController::class, 'store'])->name('form.store');

Route::get('/files/price-stavtrack.pdf', function () {
    $path = public_path('files\price.pdf');

    if (file_exists($path)) {
        return response()->file($path);
    }

    return abort(404);
});
