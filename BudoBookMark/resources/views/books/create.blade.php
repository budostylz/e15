{{-- /resources/views/books/create.blade.php --}}
@extends('layouts.master')

@section('title')
    Add a book
@endsection

@section('content')

    <h1>Add a book</h1>

    <p>Want to add a book to your list that isn’t in our library? Not a problem- you can add it here!</p>

    <form method='POST' action='/books'>
        <div class='details'>* Required fields</div>
        {{ csrf_field() }}

        <label for='title'>* Slug URL</label>
        <div class='details'>The slug is a unique URL identifier for the book, containing only alphanumeric characters and dashes. 
        <br>It’s suggested that the slug be based on the book title, e.g. a good slug for the book <em>“War and Peace”</em> would be <em>“war-and-peace”</em>.</div>
        <input dusk='slug-input' type='text' name='slug' id='slug' value='{{ old('slug') }}'>
        @include('includes.error-field', ['fieldName' => 'slug'])

        <label for='title'>* Title</label>
        <input dusk='title-input' type='text' name='title' id='title' value='{{ old('title') }}'>
        @include('includes.error-field', ['fieldName' => 'title'])

        <label for='author_id'>* Author</label>
        <select name='author_id'>
            <option value=''>None specified</option>
            @foreach($authors as $author)
                <option value='{{ $author->id }}' {{ (old('author_id') == $author->id) ? 'selected' : '' }}>{{ $author->first_name.' '.$author->last_name }}</option>
            @endforeach
        </select>
        @include('includes.error-field', ['fieldName' => 'author_id'])

        <label for='published_year'>* Published Year (YYYY)</label>
        <input dusk='published-year-input' type='text' name='published_year' id='published_year' value='{{ old('published_year') }}'>
        @include('includes.error-field', ['fieldName' => 'published_year'])

        <label for='cover_url'>Cover URL</label>
        <input dusk='cover-url-input' type='text' name='cover_url' id='cover_url' value='{{ old('cover_url', 'http://') }}'>
        @include('includes.error-field', ['fieldName' => 'cover_url'])

        <label for='info_url'>* Wikipedia URL</label>
        <input dusk='info-url-input' type='text' name='info_url' id='info_url' value='{{ old('info_url', 'http://') }}'>
        @include('includes.error-field', ['fieldName' => 'info_url'])

        <label for='purchase_url'>* Purchase URL </label>
        <input dusk='purchase-url-input' type='text' name='purchase_url' id='purchase_url' value='{{ old('purchase_url', 'http://') }}'>
        @include('includes.error-field', ['fieldName' => 'purchase_url'])

        <label for='description'>Description</label>
        <textarea dusk='description-input' name='description'>{{ old('description') }}</textarea>
        @include('includes.error-field', ['fieldName' => 'description'])

        <input type='submit' dusk='add-button' class='btn btn-primary' value='Add'>

    </form>
 
    {{-- 
    @if(count($errors) > 0)
    <ul class='alert alert-danger error'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif 
    --}}
@endsection