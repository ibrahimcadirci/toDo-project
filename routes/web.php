<?php

use App\Http\Controllers\WorkPlanController;
use App\Services\BusinessDepartment;
use App\Services\ItDepartment;
use App\Services\WorkList;
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

Route::get('/', [WorkPlanController::class, 'index'])->name('workplan');
