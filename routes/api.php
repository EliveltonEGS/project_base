<?php

use App\Http\Controllers\Contact\{
    ContactAllController,
    ContactDeleteController,
    ContactFindController,
    ContactStoreController,
    ContactUpdateController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', ContactAllController::class)->name('index');
    Route::post('/', ContactStoreController::class)->name('store');
    Route::get('/{id}', ContactFindController::class)->name('show');
    Route::put('/{id}', ContactUpdateController::class)->name('update');
    Route::delete('/{id}', ContactDeleteController::class)->name('destroy');
});
