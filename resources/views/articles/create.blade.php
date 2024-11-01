<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Create Article</title>  
</head>  
<body>  
    <h1>Create Article</h1>  
    <form action="{{ route('articles.store') }}" method="POST">  
        @csrf  
        <label>Title:</label><br>  
        <input type="text" name="title" required><br><br>  
        <label>Content:</label><br>  
        <textarea name="content" required></textarea><br><br>  
        <button type="submit">Create</button>  
    </form>  
    <a href="{{ route('articles.index') }}">Back</a>  
</body>  
</html>