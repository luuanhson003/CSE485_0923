<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Author</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<body class="m-5">
    <div class="container">
        <h2>Create New Author</h2>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class = 'mt-2'>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- Thêm liên kết đến Bootstrap JavaScript (tùy chọn) -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
