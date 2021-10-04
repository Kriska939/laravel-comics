@extends('layouts.structure')

@section('series', 'Nome Placeholder')

@section('content')

<div class="small-container">
        <div class="row">
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
            <div class="col w-300">
                <img src="{{ asset('img/adv.jpg')}}" alt="spam">
            </div>
        </div>
</div>
@endsection