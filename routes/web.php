<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardController as ControllersDashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Guest\PageController;

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

Route::get('/' , [PageController::class , 'index'])->name('home');

Route::resource('admin' , PostController::class);

Route::get('admin/posts/{id}', [PostController::class, 'show'])->name('admin.posts.show');

Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');


Route::middleware('auth')
        ->prefix('profile')
        ->name('profile.')
        ->group(function(){
            Route::get('/' , [ProfileController::class , 'edit'])->name('edit');
            Route::get('/' , [ProfileController::class , 'update'])->name('update');
            Route::get('/' , [ProfileController::class , 'destroy'])->name('destroy');
        });

require __DIR__.'/auth.php';
