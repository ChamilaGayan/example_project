<?php

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

Auth::routes();

// company
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/company', [App\Http\Controllers\CompanyController::class, 'addPage'])->name('company');
Route::get('/view-company', [App\Http\Controllers\CompanyController::class, 'viewPage'])->name('view.company');
Route::get('/company-edit{id}', [App\Http\Controllers\CompanyController::class, 'editPage']);
Route::post('/add-company', [App\Http\Controllers\CompanyController::class, 'addCompany'])->name('add.company');
Route::any('/update-company{id}', [App\Http\Controllers\CompanyController::class, 'companyUpdate']);
Route::any('/delete-company{id}', [App\Http\Controllers\CompanyController::class, 'companyDelete']);

//emplyee
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'addPage'])->name('employee');
Route::get('/view-employee', [App\Http\Controllers\EmployeeController::class, 'viewPage'])->name('view.employee');
Route::get('/employee-edit{id}', [App\Http\Controllers\EmployeeController::class, 'editPage']);
Route::post('/add-employee', [App\Http\Controllers\EmployeeController::class, 'addemployee'])->name('add.employee');
Route::any('/update-employee{id}', [App\Http\Controllers\EmployeeController::class, 'employeeUpdate']);
Route::any('/delete-employee{id}', [App\Http\Controllers\EmployeeController::class, 'employeeDelete']);
