@extends('layouts.app')

@section('page-title', 'characters')
@section('css')
<link rel="stylesheet" href="../../sass/_movies.scss">
@endsection

@section('slideshow')
<div id="slideshow" class="w-100">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="">
</div>
@endsection
@section('content')
<div id="characters" class="container-content w-100 mt-4">
    <div class="content w-75 m-auto">
        <h1>
            BROWSE CHARACTERS
        </h1>
        <div class="container_aside_card">
            <aside class="col-2 bg-white">
                <ul>
                    <h5><strong>FILTERS</strong> </h5>
                    <li><span>NAMES</span><span><i class="fas fa-plus"></i></span> </li>
                    <hr>
                    <li><span>ALINGNMENT</span><span><i class="fas fa-plus"></i></span></li>
                    <hr>
                    <li><span>TYPE</span><span><i class="fas fa-plus"></i></span></li>
                    <hr>
                    <li><span>STATUS</span><span><i class="fas fa-plus"></i></span></li>
                </ul>

            </aside>

            <div class="cards col-10 d-flex flex-wrap position-relative">
                <div class="w-100">
                    <h5><strong>CHARACTERS</strong> <span class="text-secondary"><strong>({{$charactersAll->count()}})</strong></span></h5>
                </div>
                @foreach ($characters as $character)
                <div class="singolo col-2">
                    <a href="{{route('character', $character->id)}}">
                        <div>
                            <img class="character-image" src="{{$character->image_thumb}}" alt="">
                        </div>
                        <p class="text-black">{{$character->name}}
                        </p>
                    </a>



                </div>
                @endforeach
                <div class="col-2 m-auto">
                    {{$characters->links()}}
                </div>
                <div class="search_movies position-absolute">
                    <div class="searchbar">
                        <form action="">
                            <input type="search" placeholder="Search Characters">
                            <i class="fas fa-search"></i>
                        </form>
                    </div>
                    <div class="newlest bg-secondary text-white text-center">
                        <strong>NEWLEST TO OLDEST</strong>
                    </div>


                </div>

            </div>







        </div>

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