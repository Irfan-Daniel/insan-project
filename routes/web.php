<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\donor_registration_controller;
use App\Http\Controllers\donor_overview_table_controller;
use App\Http\Controllers\overview_page_controller;
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
    return view('overviewpage');
});

Route::resource('donor', \App\Http\Controllers\overview_page_controller::class);
Route::get('/', [overview_page_controller::class,'index']);

Route::get('/beneficiaryregistrationform', [\App\Http\Controllers\beneficiary_registration_controller::class,'create']);
Route::post('registerbeneficiary', [\App\Http\Controllers\beneficiary_registration_controller::class,'store']) -> name('beneficiary.store');

Route::get('/beneficiaryview/{id}', [\App\Http\Controllers\beneficiary_operations_controller::class,'showbeneficiary']);
Route::get('beneficiaryview/delete/{id}',[\App\Http\Controllers\beneficiary_operations_controller::class,'delete']);

Route::get('/donorregistrationform', [\App\Http\Controllers\donor_registration_controller::class,'create']);
Route::post('registerdonor',  [\App\Http\Controllers\donor_registration_controller::class,'store']);
Route::get('/donorview/{id}', [\App\Http\Controllers\donor_registration_controller::class,'showdonor']);

Route::get('/donationform/{id}', [\App\Http\Controllers\donation_controller::class,'create']);
Route::post('makedonation',  [\App\Http\Controllers\donation_controller::class,'store']);
