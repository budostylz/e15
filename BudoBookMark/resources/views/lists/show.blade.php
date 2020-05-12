@extends('layouts.master')

@section('head')
    <link href='/css/lists/show.css' rel='stylesheet'>
@endsection

@section('title')
    My List
@endsection

@section('content')

    <h1>My List</h1>
    @if($books->count() == 0)
        <p dusk='no-books-message'>You have not added any books to your list yet.</p>
        <p>Start building your list by checking out the <a href='/books'>books in our library...</a></p>
    @else

        @foreach($books as $book)
        <div class='book'>
            <a href='/books/{{ $book->slug }}'><h2>{{ $book->title }}</h2></a>
            @if($book->author)
                <p>By {{ $book->author->first_name. ' ' . $book->author->last_name }}</p>
            @endif

            <form method='POST' action='#'>
                <textarea class='notes'>{{ $book->pivot->notes }}</textarea>
                <input type='submit' class='btn btn-primary' value='Update notes'>
            </form>

            <p class='added'>
                Added to your list {{ $book->pivot->created_at->diffForHumans() }}
            </p>

           <a href='#'><i class="fa fa-minus-circle"></i> Remove from your list</a>

        </div>
        @endforeach

    @endif

@endsection
