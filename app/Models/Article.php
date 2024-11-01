<?php  

namespace App\Models;  

use Illuminate\Database\Eloquent\Model;  

class Article extends Model  
{  
    // Specify the table if it's not the plural form of the model name  
    // protected $table = 'articles';  

    // Specify the fillable properties (mass assignable)  
    protected $fillable = [  
        'title',  // Add title column  
        'content', // Add content column  
    ];  

    // Uncomment if you want to disable timestamps  
    // public $timestamps = false;   

    // Define any necessary relationships here  
    /*  
    public function comments()  
    {  
        return $this->hasMany(Comment::class);  
    }  
    */  
}