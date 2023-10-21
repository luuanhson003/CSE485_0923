@extends('layouts.app')
@section('title', 'welcome')

@section('content')
    <div class= 'container'>
        <h1>welcome to my website</h1>
        <h2>Index Page</h2>
        <form action="{{ route('authors.index') }}" class="mb-3">
            <button type="submit" class="btn btn-primary">Go to Index Page</button>
        </form>
    </div>
@endsection