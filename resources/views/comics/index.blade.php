@extends('layouts.app')

@section('page-title', 'comics')

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
<div class="w-100">

    <div class="content-cards">
        <div class="w-75 m-auto">
            <ul>
                <li>
                    <a href="">
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" />
                        <p>DIGITAL COMICS</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" />
                        <p>DC MERCHANDISE</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" />
                        <p>SUBSCRIPTION</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img class="shop-locator" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" />
                        <p>COMIC SHOP LOCATOR</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img class="visa" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" />
                        <p>DC POWER VISA</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>



@endsection