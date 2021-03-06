<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('user/search', [UserController::class, 'searchUser']);
Route::get('provider/search', [ProviderController::class, 'search']);

Route::get('/', function () {
    return redirect()->route('product.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::any('/register', function() {
    return redirect()->route('product.index');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/user', [UserController::class, 'index']);
    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class);
    Route::resource('provider', ProviderController::class);
});


