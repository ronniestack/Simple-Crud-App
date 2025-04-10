<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-post</title>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Edit Blog Post</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" value="{{$post->title}}" required><br><br>
        <label for="content">Content</label><br>
        <textarea name="content" cols="50" rows="10" style="overflow: hidden;" required>{{$post->content}}</textarea><br><br>
        <button type="submit" style="cursor: pointer">Update</button>
    </form>
</body>
</html>