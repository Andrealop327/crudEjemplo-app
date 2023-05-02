<?php

use App\Http\Controllers\ProductoController;
use App\Models\productos;
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

Route::controller(productos::class)->group(function(){
Route::get('productos',[ProductoController::class, 'getAllProducts']);
Route::post('createproducto',[ProductoController::class, 'createProducts']);
Route::put('update/{id}',[ProductoController::class, 'updateProducts']);
Route::get('show/{id}',[ProductoController::class, 'showProducts']);
Route::delete('delete/{id}',[ProductoController::class, 'deleteProducts']);
}
);