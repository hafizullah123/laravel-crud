<?php  

namespace App\Http\Controllers;  

use App\Models\Article; // Make sure to import the Article model  
use Illuminate\Http\Request;  

class ArticleController extends Controller  
{  
    /**  
     * Display a listing of the resource.  
     */  
    public function index(Request $request)  
    {  
        // Get the search query from the request
        $search = $request->input('search');  

        // Retrieve articles, applying the search filter if provided
        $articles = Article::when($search, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('content', 'like', '%' . $search . '%');
        })->get();  

        $articleCount = $articles->count(); // Count the number of articles

        return view('articles.index', compact('articles', 'articleCount', 'search'));   
    }

    /**  
     * Show the form for creating a new resource.  
     */  
    public function create()  
    {  
        return view('articles.create');  
    }  

    /**  
     * Store a newly created resource in storage.  
     */  
    public function store(Request $request)  
    {  
        $request->validate([  
            'title' => 'required|string|max:255',  
            'content' => 'required|string',  
        ]);  

        Article::create($request->all());  
        return redirect()->route('articles.index')->with('success', 'Article created successfully.');  
    }  

    /**  
     * Display the specified resource.  
     */  
    public function show(string $id)  
    {  
        // Retrieve the article by ID  
        $article = Article::findOrFail($id);  
        return view('articles.show', compact('article'));  
    }  

    /**  
     * Show the form for editing the specified resource.  
     */  
    public function edit(string $id)  
    {  
        // Retrieve the article to edit  
        $article = Article::findOrFail($id);  
        return view('articles.edit', compact('article'));  
    }  

    /**  
     * Update the specified resource in storage.  
     */  
    public function update(Request $request, string $id)  
    {  
        $request->validate([  
            'title' => 'required|string|max:255',  
            'content' => 'required|string',  
        ]);  

        // Retrieve the article by ID and update it  
        $article = Article::findOrFail($id);  
        $article->update($request->all());  
        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');  
    }  

    /**  
     * Remove the specified resource from storage.  
     */  
    public function destroy(string $id)  
    {  
        // Retrieve the article by ID and delete it  
        $article = Article::findOrFail($id);  
        $article->delete();  
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');  
    }  
}
