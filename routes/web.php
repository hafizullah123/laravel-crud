<?php  

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\ArticleController;  
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Home page route
Route::get('/', [ArticleController::class, 'index']);  

// Resource route for articles
Route::resource('articles', ArticleController::class);  

// Authentication routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
