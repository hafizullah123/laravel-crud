<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Articles</title>  
</head>  
<body>  
    <h1>Articles ({{ $articleCount }})</h1>  <!-- Display the article count here -->

    <form action="{{ route('articles.index') }}" method="GET" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Search articles..." value="{{ request()->input('search') }}">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('articles.create') }}">Create New Article</a>  
    @if (session()->has('success'))  
        <p>{{ session()->get('success') }}</p>  
    @endif  

    <ul>  
        @foreach ($articles as $article)  
            <li>  
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>  
                <a href="{{ route('articles.edit', $article->id) }}">Edit</a>  
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">  
                    @csrf  
                    @method('DELETE')  
                    <button type="submit">Delete</button>  
                </form>  
            </li>  
        @endforeach  
    </ul>  
</body>  
</html>
