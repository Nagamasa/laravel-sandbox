<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodCodeBadCodeController;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index']);

Route::prefix('good_code_bad_code')->group(function() {
    Route::get('/section_3', [GoodCodeBadCodeController::class, 'section3']);
});
