<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HasilPanenController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\Petani1Controller;
use App\Http\Controllers\Info_Cempaga_FarmController;
use App\Http\Controllers\PembeliController;
use App\Models\KelompokTani;
use App\Http\Controllers\PanenController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/HasilPanen', [HasilPanenController::class, 'index'])->name('HasilPanen');
Route::get('/Petani', [PetaniController::class, 'index'])->name('Petani');
Route::get('/Pembeli', [PembeliController::class, 'index'])->name('Pembeli');;
Route::get('/Info_Cempaga_Farm', [Info_Cempaga_FarmController::class, 'index'])->name('Info_Cempaga_Farm');;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('panen', PanenController::class);
// Route::get('/addPetani', [Petani1controller::class, 'create']);
Route::get('/addpanen', [PanenController::class, 'create']);
Route::post('/addpanen/store', [PanenController::class, 'store']);

Route::get('/daftarpetani', [Petani1Controller::class, 'index']);

Route::get('/addPetani', [Petani1controller::class, 'create']);
