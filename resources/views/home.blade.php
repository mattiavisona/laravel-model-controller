@extends('layouts/main')

@section('content')

<h1>
    film fantastici
</h1>
    
<div class="container">
    @foreach ($movies as $singleMovies)
    <div class="card">
        <div class="all-card">
          <h5 class="card-text"> {{$singleMovies->title}}</h5>
          <h6 class="card-second-text"> {{$singleMovies->original_title}}</h6>
          <p class="card-third-text"> {{$singleMovies->nationality}}</p>
          <br>
          <p class="card-link"> {{$singleMovies->date}}</p>
          <strong>vote: </strong> <span> {{$singleMovies->vote}} /10 </span>
        </div>
    </div>
        
    @endforeach
</div>
@endsection