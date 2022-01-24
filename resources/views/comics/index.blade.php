@extends('layouts.app')

@section('page-title', 'comics')
@section('slideshow')
<div id="slideshow" class="w-100">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="">
</div>
@endsection
@section('content')
<div class="index-container w-100 pb-3">
    <div class="w-75 m-auto  ">
        <div class="current-serie">
            <p><strong>CURRENT SERIES</strong></p>
        </div>
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
            <div class="col-2">

                <a href="{{route('comic', $comic->id)}}">
                    <div class="singolo">
                        <img src="{{ $comic->thumb }}" alt="">
                        <h5>{{ $comic->series }}</h5>
                    </div>
                </a>



            </div>
            @endforeach
        </div>


        <div class="load-more m-auto"><a href="">LOAD MORE</a></div>
    </div>
</div>
@include('partials.cards')



@endsection