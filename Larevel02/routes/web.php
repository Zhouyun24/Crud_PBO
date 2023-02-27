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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\Admin\PageController;

Route::get('/Home',[PageController::class,'index']);
Route::get('/DataSiswa',[PageController::class,'tampil']);

route::get('/siswa',[PageController::class,'siswa']);
route::get('/NilaiSiswa',[PageController::class,'nilai']);