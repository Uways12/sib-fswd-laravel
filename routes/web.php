<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DprodukController;
use App\Http\Controllers\GrupController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TgamController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

// Route::get('/home', function () {
//     return 'Ikhtiar Untuk Segalanya';
// });

// Route::redirect('/nama', 'home');

Route::fallback(function(){
    return 'Halaman ini ghaib';
});

// Route::get('/items/{brand}', function($merk) {
//     return $merk;
// });

// Route::get('/conflict/{nama}', function($namaItem){
//     return 'Nama Barang : '.$namaItem; 
// });

//Tugas_22
Route::get('/tampil', [UserController::class, 'tampilin'] );

Route::get('/tambah', [UserController::class, 'tambahin'] );

Route::get('/edit', [UserController::class, 'editin']);

Route::get('/detail', [UserController::class, 'detailin']);


//Tugas_23 view
Route::get('/product', [ProdukController::class, 'index']);

Route::get('/productlist', [ProdukController::class, 'index']);

//Tugas_23 view

Route::get('/landing', [ProdukController::class, 'index']);

Route::get('/dashboard', [ProdukController::class, 'index2']);


//Tugas_24 
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer-create', [CustomerController::class, 'create']);
Route::post('/customer-store', [CustomerController::class, 'store']);

Route::get('/customer-edit/{id}', [CustomerController::class, 'edit']);
Route::put('/customer-update', [CustomerController::class, 'update']);

//Tugas_24

//Category
//Read
Route::get('/category', [CategoryController::class, 'index']);
//Create
Route::get('/category-create', [CategoryController::class, 'create']);
Route::post('/category-store', [CategoryController::class, 'store']);
//Update
Route::get('/category-edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category-update', [CategoryController::class, 'update']);
//Delete
Route::get('/category-delete/{id}', [CategoryController::class, 'delete']);




//Dproduk
//Read
Route::get('/dproduk', [DprodukController::class, 'index']);
//Create
Route::get('/dproduk-create', [DprodukController::class, 'create']);
Route::post('/dproduk-store', [DprodukController::class, 'store']);
//Update
Route::get('/dproduk-edit/{id}', [DprodukController::class, 'edit']);
Route::put('/dproduk-update', [DprodukController::class, 'update']);
//Delete
Route::get('/dproduk-delete/{id}', [DprodukController::class, 'delete']);



//Grup
//Read
Route::get('/grup', [GrupController::class, 'index']);
//Create
Route::get('/grup-create', [GrupController::class, 'create']);
Route::post('/grup-store', [GrupController::class, 'store']);
//Update
Route::get('/grup-edit/{id}', [GrupController::class, 'edit']);
Route::put('/grup-update', [GrupController::class, 'update']);
//Delete
Route::get('/grup-delete/{id}', [GrupController::class, 'delete']);


//Pengguna
//Read
Route::get('/pengguna', [PenggunaController::class, 'index']);
//Create
Route::get('/pengguna-create', [PenggunaController::class, 'create']);
Route::post('/pengguna-store', [PenggunaController::class, 'store']);
//Update
Route::get('/pengguna-edit/{id}', [PenggunaController::class, 'edit']);
Route::put('/pengguna-update', [PenggunaController::class, 'update']);
//Delete
Route::get('/pengguna-delete/{id}', [PenggunaController::class, 'delete']);


Route::get('/tgam', [TgamController::class, 'index']);
Route::get('/tgam-create', [TgamController::class, 'create']);
Route::post('/tgam-store', [TgamController::class, 'store']);


//Tugas_25
Route::get('/lending', [LendingController::class, 'index']);
Route::get('/lending', [DprodukController::class, 'index2']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);