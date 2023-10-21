<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Author</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<body class="m-5">
    <div class="container">
        <h2>Edit Author</h2>
        <form method="POST" action="{{ route('authors.update', ['author' => $author->id]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
