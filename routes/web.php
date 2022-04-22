<?php

use App\Http\Controllers\ContratoController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\ContractComponet;
use App\Http\Livewire\RegisterUserComponet;
use App\Http\Livewire\UsersComponet;
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
    return view('auth.login');
});

Route::get('/dashboard', [ContratoController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('', [ContratoController::class, 'index'])->middleware(['auth'])->name('dashboard');
    Route::get('/contract/create', ContractComponet::class)->middleware(['auth'])->name('contract.create');
    Route::resource('contrato', ContratoController::class)->middleware(['auth']);
    Route::get('/users/index', UsersComponet::class)->middleware(['auth'])->name('users.index');
    Route::get('/users/create', RegisterUserComponet::class)->middleware(['auth'])->name('users.create');
    Route::resource('user', UserController::class)->middleware(['auth']);
});

require __DIR__ . '/auth.php';
