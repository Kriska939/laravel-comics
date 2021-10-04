@extends('layouts.structure')

@section('series', 'Nome Placeholder')

@section('content')

<div class="small-container">
    <h3 class="text-right">ADVERTISEMENT</h3>
        <div class="row flex">
            <div class="col">
                <h1>{{$comic['title']}}</h1>
                <div class="flex w-600 j-between bg-green">
                    <div class="price-info flex j-between">
                            <p>U.S. Price: <span>{{$comic['price']}}</span> </p>
                            <p>Available</p>
                    </div>
                    <div class="availability-info">
                        <p>Check availability <i class="fas fa-sort-down"></i></p>
                    </div>
                </div>
                <div class="description w-600 ">
                    <p>{{$comic['description']}}</p>
                </div>
            </div>
            <div class="col ml-20">
                <figure>
                    <img src="{{ asset('img/dc-logo.png') }}" alt="advertising" class="adv-img" />
                  </figure>
            </div>
        </div>
</div>
@endsection