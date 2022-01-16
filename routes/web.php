<?php

use App\Services\BusinessDepartment;
use App\Services\ItDepartment;
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
    $data           = new ItDepartment();
    $data2           = new BusinessDepartment();
    return $data2->getData();
});
