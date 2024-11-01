<?php  

use Illuminate\Support\Facades\Route;  

Route::get('/', function () {  
    return view('welcome');  
});  

use App\Http\Controllers\ArticleController;  

Route::resource('articles', ArticleController::class);