<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\ItemClassificationController;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('genders', [GenderController::class, 'index'])->name('gender.index');
    Route::delete('genders/{gender}', [GenderController::class, 'destroy'])->name('gender.destroy');
    Route::patch('genders/restore', [GenderController::class, 'restore'])->name('gender.restore');

    Route::delete('item-classifications/{classification}', [ItemClassificationController::class, 'destroy'])->name('item-classification.destroy');
    Route::get('item-classifications/{gender}/trashed', [ItemClassificationController::class, 'getTrashed'])->name('item-classification.get-trashed');
    Route::patch('item-classifications/{gender}/restore', [ItemClassificationController::class, 'restore'])->name('item-classification.restore');

    Route::get('items', [ItemController::class, 'index'])->name('item.index');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::post('login', [LoginController::class, 'login'])->name('login');
