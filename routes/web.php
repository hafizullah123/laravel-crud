<?php  

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\ArticleController;  

Route::get('/', [ArticleController::class, 'index']);  

// This route resource manages all the article routes  
Route::resource('articles', ArticleController::class);  