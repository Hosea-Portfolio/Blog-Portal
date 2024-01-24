<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
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



Route::get('/', [BlogController::class, 'index']);
