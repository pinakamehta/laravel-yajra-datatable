<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Normal Table</title>
</head>
<body>
<table border="2">
    <thead>
    <tr>
        <th>ID</th>
        <th>Post Title</th>
        <th>Post Author</th>
        <th>Post Description</th>
        <th>Post Content</th>
        <th>Post Created At</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->first_name." ".$post->last_name}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->date}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
