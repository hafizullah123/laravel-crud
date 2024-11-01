<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Edit Article</title>  
</head>  
<body>  
    <h1>Edit Article</h1>  
    <form action="{{ route('articles.update', $article) }}" method="POST">  
        @csrf  
        @method('PUT')  
        <label>Title:</label><br>  
        <input type="text" name="title" value="{{ $article->title }}" required><br><br>  
        <label>Content:</label><br>  
        <textarea name="content" required>{{ $article->content }}</textarea><br><br>  
        <button type="submit">Update</button>  
    </form>  
    <a href="{{ route('articles.index') }}">Back</a>  
</body>  
</html>