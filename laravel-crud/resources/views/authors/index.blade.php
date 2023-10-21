@extends('layouts.app')
@section('title', 'Welcome Author Details')

@section('content')
<div class="my-2 mx-5">
    <nav class="navbar bg-body">
    <div class="container-fluid">
        <h2>Author Details</h2>
        <form class="d-flex">
        <a class="btn btn-success" href="{{ route('authors.create') }}"><b>+</b> Add New Author</a>
        </form>
    </div>
    </nav>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th colspan="2" style="width: 8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <th>{{ $author->id }}</th>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->created_at }}</td>
                        <td>{{ $author->updated_at }}</td>
                        <td>
                            <a href= "{{ route('authors.show', ['author' => $author->id]) }}"><i class="bi bi-eye"></i></a>
                            <a href= "{{ route('authors.edit', ['author' => $author->id]) }}"><i class="bi bi-pencil"></i></a>
                            <form id="delete-form-{{ $author->id }}" action="{{ route('authors.destroy', ['author' => $author->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); if (confirm('Do you want to delete?')) { document.getElementById('delete-form-{{ $author->id }}').submit(); }">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="pagination">
            <li class="page-item {{ ($authors->currentPage() == 1) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $authors->previousPageUrl() }}">Previous</a>
            </li>
            @for ($i = 1; $i <= $authors->lastPage(); $i++)
                <li class="page-item {{ ($authors->currentPage() == $i) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $authors->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item {{ ($authors->currentPage() == $authors->lastPage()) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $authors->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</div>
@endsection
