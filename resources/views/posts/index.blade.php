<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        *{
            font-family: 'Poppins', sans-serif;    
        }
    </style>
</head>
<body>
    <h2>Blog Posts</h2>
    <a href="/posts/create">Create post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <a class="edit" href="/posts/{{$post->id}}/edit">Edit</a>
                <form action="/posts/{{$post->id}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="cursor: pointer">Destroy</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>