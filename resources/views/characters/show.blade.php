@extends('layouts.app')

@section('page-title', 'Character')

@section('slideshow')
<div id="slideshow" class="w-100">
    <img src="{{$character->image_cover}}" alt="">
</div>
@endsection
@section('content')
<div id="character-show-top" class="show-top w-100 position-relative">
    <div class="container-img position-absolute">
        <img src="{{$character->image_thumb}}" alt="thumb">
    </div>
    <h2 class="position-absolute text-uppercase text-white">{{$character->name}}</h2>
    <div class="card_social d-flex position-absolute">
        <div>
            <a href="{{$character->facebook_page}}">
                <i class="fab fa-facebook-f mb-3"></i>
                <p class="text-white">facebook</p>
            </a>

        </div>
        <div>
            <a href="{{$character->twitter_page}}">
                <i class="fab fa-twitter mb-3"></i>
                <p class="text-white">twitter</p>
            </a>

        </div>
        <div>
            <a href="{{$character->instagram_page}}">
                <i class="fab fa-instagram mb-3"></i>
                <p class="text-white">instagram</p>
            </a>

        </div>

    </div>

</div>


<div id="character-show-middle" class="show-middle w-100 bg-white">
    <div class="w-50 m-auto d-flex">
        <div class="col-8 pe-5">

            <div class="description">
                <p>{{$character->description}}</p>
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
            <h4>Character Facts</h4>
        </div>
        <div class="col-6 talent">
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Powers:</p>
                </div>
                <div class="col-9 pe-3">
                    <p>{{$character->powers}}</p>
                </div>
            </div>
            <hr>

        </div>
        <div class="col-6 specs">
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>First Appearance:</p>
                </div>
                <div class="col-9 pe-3">
                    <p>{{$character->first_appearance}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Alias/Alter Ego:</p>
                </div>
                <div class="col-9 pe-3">
                    <p>{{$character->alter_ego}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Occupation:</p>
                </div>
                <div class="col-9 pe-3">
                    <p>{{$character->occupation}}</p>
                </div>
            </div>
            <hr>
        </div>

    </div>
</div>
@include('partials.cards')


@endsection