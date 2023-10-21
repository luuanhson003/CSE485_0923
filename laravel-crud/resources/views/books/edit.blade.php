<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<body class="m-5">
    <div class="container">
        <h2>Edit Book</h2>
        <form method="POST" action="{{ route('books.update', ['book' => $book->id]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="author_id" class="form-label">ID Author</label>
                <input type="text" class="form-control" id="author_id" name="author_id" value="{{ $book->author_id }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
