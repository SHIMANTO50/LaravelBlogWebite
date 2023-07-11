<!DOCTYPE html>
<html>
<head>
    <title>Show Post</title>
</head>
<body>
    <h1>Post Details</h1>

    @if ($post)
        <h2>Title: {{ $post->title }}</h2>
        <p>Content: {{ $post->content }}</p>
        <!-- Add any other desired post information -->
    @else
        <p>Post not found.</p>
    @endif
</body>
</html>