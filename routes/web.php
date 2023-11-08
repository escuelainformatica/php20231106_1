<?php

use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\Route;

function links() {
    return ['link1','link2'];
}



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
Route::get('/',[PaisController::class,'index'])->name('pais.listar');
Route::get('/insertar',[PaisController::class,'create'])->name('pais.insertar');
Route::post('/insertar',[PaisController::class,'store'])->name('pais.insertar2');
Route::get('/listar',function(){
    return view('ejemplo');
});