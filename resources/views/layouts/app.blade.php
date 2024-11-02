<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="{{ route('articles.index') }}">Articles</a></li>
                <li><a href="{{ route('articles.create') }}">Create Article</a></li>
                <!-- Add more sidebar links as needed -->
            </ul>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
