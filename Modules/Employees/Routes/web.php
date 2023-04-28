<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Employees\Http\Controllers\EmployeesController;

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::post('/employees', [EmployeesController::class, 'store'])->name('employees.store');
