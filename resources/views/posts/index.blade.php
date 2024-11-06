<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>My Blog</h1>
    <a href="{{ route('post.create') }}">Create New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
