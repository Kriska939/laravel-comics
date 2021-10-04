@extends('layouts.structure')

@section('content')

<section id="content">
    <div class="container flex">
       <!-- START FOREACH--> 
        @foreach($Infocomics as $key => $comic)
        <div class="comic">
          <a href="{{route('comicdetail', ['id' => $loop->index])}}">
            <img src="{{ $comic['thumb']}}" alt="{{ $comic['series']}}" />
            <h3>{{ $comic['series']}}</h3>
        </div>
        
        @endforeach
    </div>
    <button>LOAD MORE</button>
  </section>
@endsection