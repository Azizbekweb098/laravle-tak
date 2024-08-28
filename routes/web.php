<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TakController;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/welcome/{id?}', function ($id = null) {
//    return 'Sizning id inigz - ' . $id;
//})->name('malumot-olish');
//
//Route::get('/id/{id}', function (string $id) {
//    return 'Siznig id inigiz' . $id;
//})->where('id', '[0-9]');
//
//Route::get('yangi/{name?}', function (?string $name = 'Azizbek')
//   return $name;
//});
//
Route::prefix('admin')->group(function () {
    Route::get('/id/{id?}/edit', function (?string $id = null) {
        return 'Sizning ismingiz ' . $id . ' Ozgartildi';
    });
});
//
//Route::get('/users', [UserController::class, 'index']);
//Route::get('/users/create', [UserController::class, 'create']);
//Route::get('/users/{users?}', [UserController::class, 'tahrirlash']);
//Route::get('/users/{user}/edit', [UserController::class, 'edit']);
//Route::post('/user-create', [UserController::class, 'show']);
//

Route::get('/', [UserController::class, 'index']);
Route::get('yiban', [TakController::class, 'about'])->name('about');
Route::get('service', [TakController::class, 'service'])->name('service');
Route::get('project', [TakController::class, 'project'])->name('project');
Route::get('contact', [TakController::class, 'contact'])->name('contact');


Route::resource('posts', PostController::class);
