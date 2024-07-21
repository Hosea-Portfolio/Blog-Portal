<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryBlogController;
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

Route::get('/admin/forgot-password', [RegisterController::class, 'forgotpassword']);
Route::post('/admin/forgot-password', [RegisterController::class, 'forgotpasswordpost']);
Route::get('/admin/reset-password/{token}', [RegisterController::class, 'resetpassword']);
Route::post('/admin/reset-password', [RegisterController::class, 'resetpasswordpost']);

Route::get('/admin/sign-in', [LoginController::class, 'index'])->name('sign-in')->middleware('guest');
Route::post('/admin/sign-in', [LoginController::class, 'authenticate']);
Route::post('/admin/sign-out', [LoginController::class, 'logout']);


Route::get('/admin/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index', [
        'active' => 'Dashboard Blog Portal'
    ]);
})->middleware('auth');

Route::get('/admin/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/admin/dashboard/posts/unpublish/{id}', [UserController::class, 'unpublish'])->middleware('auth');
Route::get('/admin/dashboard/posts/publish/{id}', [UserController::class, 'publish'])->middleware('auth');

Route::resource('/admin/dashboard/users', UserController::class)->middleware('auth');
Route::get('/admin/dashboard/users/unpublish/{id}', [UserController::class, 'unpublish'])->middleware('auth');
Route::get('/admin/dashboard/users/publish/{id}', [UserController::class, 'publish'])->middleware('auth');

Route::resource('/admin/dashboard/roles', RoleController::class)->middleware('auth');
Route::get('/admin/dashboard/roles/unpublish/{id}', [RoleController::class, 'unpublish'])->middleware('auth');
Route::get('/admin/dashboard/roles/publish/{id}', [RoleController::class, 'publish'])->middleware('auth');

Route::get('/admin/dashboard/categories/checkSlug', [CategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/dashboard/categories', CategoryController::class)->middleware('auth');
Route::get('/admin/dashboard/categories/unpublish/{id}', [CategoryController::class, 'unpublish'])->middleware('auth');
Route::get('/admin/dashboard/categories/publish/{id}', [CategoryController::class, 'publish'])->middleware('auth');



Route::get('/', [BlogController::class, 'index']);
Route::get('/category', [CategoryBlogController::class, 'index']);
Route::get('/category/{slug}', [CategoryBlogController::class, 'show']);
Route::get('/like/{id}', [BlogController::class, 'like']);
Route::get('/dislike/{id}', [BlogController::class, 'dislike']);
Route::get('/{slug}', [BlogController::class, 'show']);
