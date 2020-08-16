<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <title>Yajra Datatable</title>
</head>
<body>
<div class="container">
    <table id="posts-table">
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

        </tbody>
    </table>
</div>
</body>
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#posts-table').DataTable({
            processing: true,
            serverSide: true,
            pageLength: 25,
            ajax: "{{route('yajra-ajax')}}",
            columns: [
                {data: 'id', name: 'posts.id'},
                {data: 'title', name: 'posts.title'},
                {data: 'first_name', name: 'authors.first_name'},
                {data: 'description', name: 'posts.description', searchable: false, orderable: false},
                {data: 'content', name: 'posts.content', searchable: false, orderable: false},
                {data: 'date', name: 'posts.date', searchable: false, orderable: false},
            ],
            createdRow: function (row, data, dataIndex) {
                //
            },
        });
    });
</script>
</html>
