@extends('template')

@include('navbar')

@section('title' , 'home')

@section('content')
    <div class="px-5 pb-3 d-flex flex-column gap-4">
        <div class="p-3 border rounded bg-light d-flex flex-column">
            <span>Address: {{$publisher->address}}</span>
            <span>Phone: {{$publisher->phone}}</span>
            <span>Email: {{$publisher->email}}</span>
        </div>
        <div class="row row-cols-4">
            @foreach ($publisher->books as $bok)
                @include('book.bookcontent', ['book' => $bok])
            @endforeach
        </div>
    </div>
@endsection