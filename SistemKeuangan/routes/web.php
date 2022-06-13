<?php

use App\Http\Controllers\PencatatanController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

//Route::get('inputdata', function () {
  //  return view('transaksi/inputdata');
//});
Route::get('/user', [PencatatanController::class, 'users']);
Route::get('master/AddUser', [PencatatanController::class, 'AddUser']);
Route::post('master/AddUser', [PencatatanController::class, 'AddUserProcess']);
Route::get('/transaksi', [PencatatanController::class, 'pencatatan']);

Route::get('laporan', function () {
    return view('laporan');
});

