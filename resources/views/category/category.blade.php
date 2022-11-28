@extends('template')

@include('navbar')

@section('title' , 'Category: ' . $category->name)

@section('content')
    <div class="px-5 py-3">
        <div class="row row-cols-4">
            @foreach ($category->books as $bok)
                @include('book.bookcontent', ['book' => $bok])
            @endforeach
        </div>
    </div>
@endsection