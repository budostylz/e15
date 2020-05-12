@extends('layouts.master')

@section('title')
{{ $book ? $book->title : 'Book not found' }}
@endsection

@section('head')
<link href='/css/books/show.css' rel='stylesheet'>
@endsection

@section('content')

@if(!$book) 
    Book not found. <a href='/books'>Check out the other books in our library...</a>
@else
<img class='cover' src='{{ $book->cover_url }}' alt='Cover photo for {{ $book->title }}'>

<h1 dusk='book-title-heading'>{{ $book->title }}</h1>

@if($book->author)
    <p dusk='author-info'>By {{ $book->author->first_name. ' ' . $book->author->last_name }}</p>
@endif

<p>({{ $book->published_year }})</p>

<a href='{{ $book->purchase_url }}'>Purchase...</a>

<p class='description'>
    {{ $book->description }}
    <a href='{{ $book->info_url }}'>Learn more...</a>
</p>

<ul class='bookActions'>
    <li><a href='/list/{{ $book->slug }}/add' dusk='add-to-list-button'><i class="fa fa-plus"></i> Add to your list</a>
    <li><a href='/books/{{ $book->slug }}/edit'><i class="fa fa-edit"></i> Edit</a>
    <li><a href='/books/{{ $book->slug }}/delete'><i class="fa fa-trash"></i> Delete</a>
</ul>
@endif

@endsection