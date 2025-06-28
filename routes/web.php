<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KualifikasiBidangController;
use App\Http\Controllers\TahunAngkatanController;
use App\Http\Controllers\DataAlumniController;
use App\Http\Controllers\FormAlumniController;
use App\Http\Controllers\ProsesKmeansController;
use App\Http\Controllers\HasilKmeansController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExportKmeansController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\RegisterController;
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

// Login Routes
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
