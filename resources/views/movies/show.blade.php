@extends('layouts.app')

@section('page-title', 'movie')

@section('slideshow')
<div id="slideshow" class="w-100">
    <img src="{{$movie->image_cover}}" alt="">
</div>
@endsection
@section('content')
<div class="show-top w-100 position-relative">
    <div class="container-img position-absolute">
        <img src="{{$movie->image_thumb}}" alt="thumb">
    </div>
    <div class="card_social d-flex position-relative">
        <div>
            <a href="{{$movie->facebook_page}}">
                <i class="fab fa-facebook-f mb-3"></i>
                <p class="text-white">facebook</p>
            </a>

        </div>
        <div>
            <a href="{{$movie->twitter_page}}">
                <i class="fab fa-twitter mb-3"></i>
                <p class="text-white">twitter</p>
            </a>

        </div>
        <div>
            <a href="{{$movie->instagram_page}}">
                <i class="fab fa-instagram mb-3"></i>
                <p class="text-white">instagram</p>
            </a>

        </div>

    </div>

</div>


<div class="show-middle w-100 bg-white">
    <div class="w-50 m-auto d-flex">
        <div class="col-8 pe-5">
            <h3>{{$movie->title }} ({{$movie->year}})</h3>

            <div class="description">
                <p>{{$movie->description}}</p>
            </div>

        </div>
        <div class="col-4">
            <p class="advertisement text-end"><strong>ADVERTISEMENT</strong></p>
            <img class="w-100" src="{{asset('img/adv.jpg')}}" alt="Adv">

        </div>

    </div>
</div>
<div class="show-bottom w-100 pt-4 pb-5">
    <div class="w-50 m-auto d-flex flex-wrap">
        <div class="w-100">
            <h4>Additional information</h4>
        </div>
        <div class="col-6 talent">
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Cast:</p>
                </div>
                <div class="col-9 pe-3">
                    <p>{{$movie->cast}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Genres:</p>
                </div>
                <div class="col-9 pe-3">
                    <p>{{$movie->genres}}</p>
                </div>
            </div>
        </div>
        <div class="col-6 specs">
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Directors:</p>
                </div>
                <div class="col-9">
                    <p>{{$movie->directors}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Producers:</p>
                </div>
                <div class="col-9">
                    <p>{{$movie->producers}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Writers:</p>
                </div>
                <div class="col-9">
                    <p>{{$movie->writers}}</p>
                </div>
            </div>
            <hr>
        </div>

    </div>
</div>
@include('partials.cards')


@endsection