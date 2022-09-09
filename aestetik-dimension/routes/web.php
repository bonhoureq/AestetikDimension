<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});

Route::get('/register', [UsersController::class, 'showr'])->name('register');

Route::post('/register', [UsersController::class, 'send'])->name('sendregister');

Route::get('/login', [UsersController::class, 'showl'])->name('login');

Route::post('login', [UsersController::class, 'connect'])->name('sendlogin');

Route::get('/reset', [UsersController::class, 'showre'])->name('reset');

Route::post('/reset', [UsersController::class, 'resetp'])->name('sendreset');

Route::get('/logout', [UsersController::class, 'logout']);

Route::get('/admin ', [AdminController::class, 'showa'])->name('admin');

Route::post('/admin', [AdminController::class, 'add'])->name('sendadmin');

Route::get('/panier', function () {
    return view('panier');
})->name("panier");

Route::post('/panier', [AdminController::class, 'viewpanier'])->name('vpanier');

Route::get('produit/{id}', function ($id) {

    $data = DB::table('products')->where('id', "=", $id)->get();

    return view('produit', ['data' => $data]);
});

Route::get('catalog', function () {

    $data = DB::table('products')->get();

    return view('catalog', ['data' => $data]);
})->name("catalog.product");
