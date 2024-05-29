<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FilePDFController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/halamanuser', function () {
    return view('user/homeuser');
});
Route::get('/cetakuser', function () {
    return view('user/cetakuser');
});
Route::get('/homeadmin', function(){
    return view('admin/adminhome');
});
Route::get('/admin', function () {
    return view('admin/adminuserdata');
});
Route::get('/admincetakuser', function () {
    return view('admin/admincetakdata');
});
Route::get('/admincetaksertifikat', function () {
    return view('admin/admincetaksertifikat');
});
Route::get('/adminedit', function () {
    return view('admin/adminedit');
});
Route::get('/login', function () {
    return view('login');
});

//Certificate PDF
Route::get('/test', [FilePDFController::class, 'test']);
Route::post('/proses', [FilePDFController::class, 'proses'])->name('buat');
Route::get('/print1', [FilePDFController::class, 'template1']);
Route::post('/print1', [FilePDFController::class, 'print1'])->name('print1');
Route::get('/print2', [FilePDFController::class, 'template2']);
Route::post('/print2', [FilePDFController::class, 'print2'])->name('print2');
Route::get('/print3', [FilePDFController::class, 'template3']);
Route::post('/print3', [FilePDFController::class, 'print3'])->name('print3');