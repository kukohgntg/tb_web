<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookControllers;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::middleware('only_guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');

    Route::middleware('only_admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('books', [BookControllers::class, 'index']);
        Route::get('book-add', [BookControllers::class, 'add']);
        Route::post('book-add', [BookControllers::class, 'store']);
        Route::get('book-edit/{slug}', [BookControllers::class, 'edit']);
        Route::post('book-edit/{slug}', [BookControllers::class, 'update']);
        Route::get('book-delete/{slug}', [BookControllers::class, 'delete']);
        Route::get('book-destroy/{slug}', [BookControllers::class, 'destroy']);
        Route::get('book-deleted', [BookControllers::class, 'deleted']);
        Route::get('book-restore/{slug}', [BookControllers::class, 'restore']);

        Route::get('categories', [CategoryController::class, 'index']);
        Route::get('category-add', [CategoryController::class, 'add']);
        Route::post('category-add', [CategoryController::class, 'store']);
        Route::get('category-edit/{slug}', [CategoryController::class, 'edit']);
        Route::put('category-edit/{slug}', [CategoryController::class, 'update']);
        Route::get('category-delete/{slug}', [CategoryController::class, 'delete']);
        Route::get('category-destroy/{slug}', [CategoryController::class, 'destroy']);
        Route::get('category-deleted', [CategoryController::class, 'deleted']);
        Route::get('category-restore/{slug}', [CategoryController::class, 'restore']);

        Route::get('users', [UserController::class, 'index']);
        Route::get('registered-users', [UserController::class, 'registeredUser']);
        Route::get('user-detail/{slug}', [UserController::class, 'detailUser']);
        Route::get('user-approve/{slug}', [UserController::class, 'approveUser']);
        Route::get('user-ban/{slug}', [UserController::class, 'banUser']);
        Route::get('user-destroy/{slug}', [UserController::class, 'destroyUser']);
        Route::get('user-banned', [UserController::class, 'bannedUser']);
        Route::get('user-restore/{slug}', [UserController::class, 'restoreUser']);
    });

    Route::get('rent-logs', [RentLogController::class, 'index']);
});
