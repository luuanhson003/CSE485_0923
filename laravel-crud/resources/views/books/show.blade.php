<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Book</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<body class="m-5">
    <div class="container">
        <h2>Book Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID Author: {{ $book->author_id }}</h5>
                <p class="card-text">Name Author: {{ $book->author->name }}</p>
                <p class="card-text">Title: {{ $book->title }}</p>
                <p class="card-text"><small class="text-muted">Created at: {{ $book->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Updated at: {{ $book->updated_at }}</small></p>
            </div>
        </div>
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
