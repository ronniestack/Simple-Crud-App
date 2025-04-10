<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <h2>Create a Blog Post</h2>
    <form action="/posts" method="POST">
        @csrf
        <label>Title</label>
        <input type="text" name="title" required><br><br>
        <label>Content</label><br>
        <textarea name="content" cols="50" rows="10" style="overflow: hidden;" required></textarea><br><br>
        <button type="submit">Publish</button>
    </form>
</body>
</html>