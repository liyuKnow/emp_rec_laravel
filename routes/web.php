<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session as Session;

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
    return view('login');
});

Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::post('/add_user', [UserController::class, 'addUser']);


Route::get('/home', [UserController::class, 'home']);

Route::get("current", [EmployeeController::class, 'current']);
Route::get("past", [EmployeeController::class, 'past']);
Route::get("add_employee", [EmployeeController::class, 'addEmployee']);
Route::post("add_employee", [EmployeeController::class, 'addEmployee']);
