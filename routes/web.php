<?php  

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\ArticleController;  

// Route for the articles resource  
Route::resource('articles', ArticleController::class);