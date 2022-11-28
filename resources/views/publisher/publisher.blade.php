@extends('template')

@include('navbar')

@section('title' , 'home')

@section('content')
    <div class="px-5 py-3 container">
        <div class="row row-cols-2 gx-3 gy-3">
            @foreach ($publishers as $publisher)
                @include('publisher.publishercontent', ['publisher' => $publisher])
            @endforeach
        </div>
    </div>
@endsection