@extends('template')

@include('navbar')

@section('title' , 'home')

@section('content')
    <div class="row px-5">
        <div class="col-lg-2" style="width: 20rem;">
            <img src="{{asset($book->image)}}" class="img-thumbnail" alt="{{$book->title . ' Image'}}" />
        </div>
        <div class="col">
            <h4>{{$book->title}}</h4>
            <p>
                <span class="text-secondary">Author: </span> {{$book->author}}
            </p>
            <p>
                <span class="text-secondary">Publisher: </span> {{$book->publisher->name}}
            </p>
            <p>
                <span class="text-secondary">Year: </span> {{$book->year}}
            </p>
            <p class="m-0">
                <span class="text-secondary">Synopsis: </span>
            </p>
            <p class="text-justify">
                {{$book->synopsis}}
            </p>
            <div class="d-flex align-items-center">
                <span class="text-secondary">Category: </span>
                <div class="d-flex">
                    @foreach ($book->categories as $category)
                        <a href="{{route('category.category', $category->id)}}"
                            class="mx-3 px-3 py-1 btn btn-outline-dark">{{$category->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection