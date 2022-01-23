@extends('layouts.app')

@section('page-title', 'Comic')

@section('content')
<div class="show-top w-100 position-relative">
    <div class="container-img position-absolute">
        <img src="{{$comic->thumb}}" alt="thumb">
    </div>

</div>
<div class="show-middle w-100 bg-white">
    <div class="w-50 m-auto d-flex">
        <div class="col-8">
            <h3>{{ $comic->title }}</h3>
            <div class="tabella d-flex w-100 align-items-center">
                <div class="prezzo col-9 d-flex justify-content-between pe-3">
                    <p>U.S. Price: <span class="text-white">{{$comic->price}}</span></p>
                    <p>AVAILABLE</p>
                </div>
                <div class="col-3 ">
                    <p class="text-white ps-3">Check Availability</p>
                </div>
            </div>
            <div class="description">
                <p>{{$comic->description}}</p>
            </div>

        </div>
        <div class="col-4">
            <p class="advertisement text-end"><strong>ADVERTISEMENT</strong></p>
            <img class="w-100 h-100" src="{{asset('img/adv.jpg')}}" alt="Adv">

        </div>

    </div>
</div>
<div class="show-bottom w-100">
    <div class="w-50 m-auto d-flex">
        <div class="col-6">
            <h4>Talent</h4>
            <hr>
            <div class="d-flex">

            </div>
            <hr>
            <div class="d-flex">

            </div>
        </div>
        <div class="col-6">
            <h4>Specs</h4>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>Series:</p>
                </div>
                <div class="col-9">
                    <p>{{$comic->series}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>U.S. Price:</p>
                </div>
                <div class="col-9">
                    <p>{{$comic->price}}</p>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="col-3">
                    <p>On Sale Date:</p>
                </div>
                <div class="col-9">
                    <p>{{$comic->sale_date}}</p>
                </div>
            </div>
            <hr>





        </div>

    </div>
</div>


@endsection