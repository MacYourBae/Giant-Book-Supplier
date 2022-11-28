<div class="col">
    <div class="card h-100">
        <img src="{{asset($book->image)}}" class="card-img-top" alt="{{$book->title . ' Image'}}">
        <div class="card-body h-100 d-flex flex-column">
            <h4 class="card-title">{{$book->title}}</h4>
            <p class="card-text">
                <i>by: </i> 
                {{$book->author}}
            </p>
            <a href="{{route('book.bookdetail', $book->id)}}" class="btn btn-primary mt-auto">Detail</a>
        </div>
    </div>
</div>