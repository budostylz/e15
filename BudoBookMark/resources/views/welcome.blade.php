@extends('layouts.master')

@section('content')
    <h1>Welcome to Bookmark...</h1>
@endsection

@section('form')

<form method='GET' action='/search'>

    <h2>Search for a book to add to your list</h2>

    <fieldset>
        <label for='searchTerms'>
            Search terms:
            <input type='text' name='searchTerms' id='searchTerms' value='{{ $searchTerms }}'>        
        </label>
    </fieldset>

    <fieldset>
        <label>
            Search type:
        </label>

        <input 
            type='radio' 
            name='searchType' 
            id='title' 
            value='title'
            {{ ($searchType == 'title' or is_null($searchType)) ? 'checked' : '' }}
        >
        <label for='title'> Title</label>
        
        <input 
            type='radio' 
            name='searchType' 
            id='author' 
            value='author'
            {{ ($searchType == 'author') ? 'checked' : '' }} 
        >
        <label for='author'> Author</label>
        
    </fieldset>

    <input type='submit' class='btn btn-primary' value='Search'>

</form>

@if(!is_null($searchResults))
    @if(count($searchResults) == 0)
        <div class='results alert alert-warning'>
            No results found.
        </div>
    @else
        <div class='results alert alert-primary'>

           {{ count($searchResults) }} 
           {{ Str::plural('Result', count($searchResults)) }}:

            <ul>
                @foreach($searchResults as $slug => $book)
                    <li><a href='/books/{{ $slug }}'> {{ $book['title']   }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif
@endif

@endsection