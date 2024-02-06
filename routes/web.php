<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;

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

Route::get('/admin/sign-in', [LoginController::class, 'index']);
Route::post('/admin/sign-in', [LoginController::class, 'authenticate']);

Route::get('/admin/register', [RegisterController::class, 'index']);
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index', [
        'active' => 'Dashboard Blog Portal'
    ]);
});

Route::get('/admin/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/admin/dashboard/posts', DashboardPostController::class);
Route::get('/admin/dashboard/posts/unpublish/{id}', [UserController::class, 'unpublish']);
Route::get('/admin/dashboard/posts/publish/{id}', [UserController::class, 'publish']);

Route::resource('/admin/dashboard/users', UserController::class);
Route::get('/admin/dashboard/users/unpublish/{id}', [UserController::class, 'unpublish']);
Route::get('/admin/dashboard/users/publish/{id}', [UserController::class, 'publish']);

Route::resource('/admin/dashboard/roles', RoleController::class);
Route::get('/admin/dashboard/roles/unpublish/{id}', [RoleController::class, 'unpublish']);
Route::get('/admin/dashboard/roles/publish/{id}', [RoleController::class, 'publish']);

Route::get('/admin/dashboard/categories/checkSlug', [CategoryController::class, 'checkSlug']);
Route::resource('/admin/dashboard/categories', CategoryController::class);
Route::get('/admin/dashboard/categories/unpublish/{id}', [CategoryController::class, 'unpublish']);
Route::get('/admin/dashboard/categories/publish/{id}', [CategoryController::class, 'publish']);



Route::get('/', [BlogController::class, 'index']);
Route::get('/like/{id}', [BlogController::class, 'like']);
Route::get('/dislike/{id}', [BlogController::class, 'dislike']);
Route::get('/{slug}', [BlogController::class, 'show']);
