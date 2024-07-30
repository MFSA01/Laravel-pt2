<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HardwareController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    echo "Hello World";
});

Route::get("hello/{name}", function($nama){
    echo "Hallo {$nama}, anda sedang belajar laravel, mudah bukan ? bukan.";
});

Route::get("/hardware", [HardwareController::class, "index"]);

Route::delete('/hardware/{id}', [HardwareController::class, 'destroy'])->name('hardware.destroy');

Route::get("/hardware/create", [HardwareController::class, "create"])->name("hardware.create");
Route::post("/hardware", [HardwareController::class, "store"])->name("hardware.store");

Route::get("/hardware/{id}", [HardwareController::class, "edit"]);
Route::put("/hardware/{id}", [HardwareController::class, "update"])->name("hardware.update");