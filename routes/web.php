<?php

use App\Http\Controllers\OperationalChecklist;
use App\Http\Controllers\OperationalReport;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home')->middleware(['auth']);

Route::get('/operational_checklist', [OperationalChecklist::class, 'index'])->name('operational_checklist');
Route::get('/operational_report', [OperationalReport::class, 'index'])->name('operational_report');

Route::controller(UserController::class)->middleware('auth')->name('users.')->group(function () {
    Route::get('/users', 'index')->name('index');
    Route::post('/users', 'store')->name('store');
    Route::get('/users/create', 'create')->name('create');
    Route::get('/users/{user}/edit', 'edit')->name('edit');
    Route::put('/users/{user}/update', 'update')->name('update');
    Route::delete('/users/{user}/delete', 'delete')->name('delete');
});

require 'auth.php';
