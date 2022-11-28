@extends('template')

@include('navbar')

@section('title' , 'home')

@section('content')
    <div class="px-5 py-3">
        <div class="row row-cols-4 gy-4">
            @foreach ($books as $bok)
                @include('book.bookcontent', ['book' => $bok])
            @endforeach
        </div>
    </div>
@endsection