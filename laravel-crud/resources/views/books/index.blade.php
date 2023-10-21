@extends('layouts.app')
@section('title', 'Welcome Book Details')

@section('content')
<div class="my-2 mx-5">
    <nav class="navbar bg-body">
    <div class="container-fluid">
        <h2>Book Details</h2>
        <form class="d-flex">
        <a class="btn btn-success" href="{{ route('books.create') }}"><b>+</b> Add New Book</a>
        </form>
    </div>
    </nav>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID Author</th>
                    <th>Name Author</th>
                    <th>Title</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th colspan="2" style="width: 8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <th>{{ $book->id }}</th>
                        <th>{{ $book->author_id }}</th>
                        <td>@if ($book->author)
                                {{ $book->author->name }}
                            @else
                                No Author Found
                            @endif
                        </td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>{{ $book->updated_at }}</td>
                        <td>
                            <a href= "{{ route('books.show', ['book' => $book->id]) }}"><i class="bi bi-eye"></i></a>
                            <a href= "{{ route('books.edit', ['book' => $book->id]) }}"><i class="bi bi-pencil"></i></a>
                            <form id="delete-form-{{ $book->id }}" action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); if (confirm('Do you want to delete?')) { document.getElementById('delete-form-{{ $book->id }}').submit(); }">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="pagination">
            <li class="page-item {{ ($books->currentPage() == 1) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $books->previousPageUrl() }}">Previous</a>
            </li>
            @for ($i = 1; $i <= $books->lastPage(); $i++)
                <li class="page-item {{ ($books->currentPage() == $i) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $books->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item {{ ($books->currentPage() == $books->lastPage()) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $books->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</div>
@endsection
