@extends('layouts.app')

@section('page-title', 'Comic')
@section('slideshow')
<div id="slideshow" class="w-100">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="">
</div>
@endsection
@section('content')
<div class="show-top w-100 position-relative">
    <div class="container-img position-absolute">
        <img src="{{$comic->thumb}}" alt="thumb">
    </div>

</div>
<div class="show-middle w-100 bg-white">
    <div class="w-50 m-auto d-flex">
        <div class="col-8 pe-4">
            <h3>{{ $comic->title }}</h3>
            <div class="tabella d-flex w-100 align-items-center">
                <div class="prezzo col-8 d-flex justify-content-between pe-3">
                    <p>U.S. Price: <span class="text-white">{{$comic->price}}</span></p>
                    <p>AVAILABLE</p>
                </div>
                <div class="col-4 text-center ">
                    <p class="text-white">Check Availability</p>
                </div>
            </div>
            <div class="description">
                <p>{{$comic->description}}</p>
            </div>

        </div>
        <div class="col-4">
            <p class="advertisement text-end"><strong>ADVERTISEMENT</strong></p>
            <img class="w-100" src="{{asset('img/adv.jpg')}}" alt="Adv">

        </div>

    </div>
</div>
<div class="show-bottom w-100 pt-4 pb-5">
    <div class="w-50 m-auto d-flex">
        <div class="col-6 talent">
            <h4 class="mb-4">Talent</h4>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Art by:</p>
                </div>
                <div class="col-9">
                    <p></p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Written by:</p>
                </div>
                <div class="col-9">
                    <p></p>
                </div>


            </div>
        </div>
        <div class="col-6 specs">
            <h4 class="mb-4">Specs</h4>
            <hr>
            <div class="d-flex ">
                <div class="col-3">
                    <p>Series :</p>
                </div>
                <div class="col-9 text-end">
                    <p class="text-primary">{{$comic->series}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>U.S. Price:</p>
                </div>
                <div class="col-9 text-end">
                    <p>{{$comic->price}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>On Sale Date:</p>
                </div>
                <div class="col-9 text-end">
                    <p>{{$comic->sale_date}}</p>
                </div>
            </div>
            <hr>





        </div>

    </div>
</div>
@include('partials.cards')


@endsection