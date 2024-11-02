<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Articles</title>  
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 200px;
            padding: 20px;
            border-right: 1px solid #ccc;
        }
        .content {
            padding: 20px;
            flex-grow: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            margin-right: 10px;
        }
    </style>
</head>  
<body>  
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="{{ route('articles.index') }}">Articles</a></li>
            <li><a href="{{ route('articles.create') }}">Create Article</a></li>
            <!-- Add more links as needed -->
        </ul>
    </div>

    <div class="content">
        <h1>Articles ({{ $articleCount }})</h1>  <!-- Display the article count here -->

        <form action="{{ route('articles.index') }}" method="GET" style="margin-bottom: 20px;">
            <input type="text" name="search" placeholder="Search articles..." value="{{ request()->input('search') }}">
            <button type="submit">Search</button>
        </form>

        <a href="{{ route('articles.create') }}">Create New Article</a>  
        @if (session()->has('success'))  
            <p>{{ session()->get('success') }}</p>  
        @endif  

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>  
                @foreach ($articles as $article)  
                    <tr>  
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>  
                        </td>
                        <td>
                            <a href="{{ route('articles.edit', $article->id) }}">Edit</a>  
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">  
                                @csrf  
                                @method('DELETE')  
                                <button type="submit">Delete</button>  
                            </form>  
                        </td>  
                    </tr>  
                @endforeach  
            </tbody>
        </table>  
    </div>
</body>  
</html>
