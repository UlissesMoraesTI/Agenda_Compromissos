<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/agendas',
    [AgendasController::class, 'index']
);

Route::get(
    '/agendas/criar',
    [AgendasController::class, 'create']
);

Route::post(
    '/agendas/criar',
    [AgendasController::class, 'store']
);

Route::delete(
    '/agendas/remover/{id}',
    [AgendasController::class, 'destroy']
);
