@extends ('layouts.admin')
@section('page-title', 'Admin/movies')
@section ('content')
@include('partials.sidebar')
<div class="container_table ms-3">
    <div class="d-flex w-25 justify-content-around pt-4 pb-4">
        <i class="fas fa-database"></i>
        <h3>Movies list</h3>
        <button type="button" class="btn btn-success"><a class="text-white" href="{{route('admin.movies.create')}}">+ create</a>
        </button>
    </div>
    @if (session('messaggio'))
    <div class="alert alert-success">
        {{session('messaggio')}}
    </div>
    @endif

    <div class="d-grid gap-3">

    </div>
    <table class="table">
        <thead class="text-secondary">
            <tr>
                <th>Title</th>
                <th class="w-25">Descritpion</th>
                <th>Year</th>
                <th>Images</th>
                <th>Social</th>
                <th class="w-25">Talent</th>
                <th>Genres</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td scope="row">{{$movie -> title}}</td>
                <td class="description-movie"><span>{{$movie -> description}}</span></td>
                <td>{{$movie -> year}}</td>
                <td class=""> <img class="col-4" src="{{$movie -> image_thumb}}" alt="">
                    <img class="col-8 float-end" src="{{$movie -> image_cover}}" alt="">
                </td>
                <td>
                    <a href="{{$movie -> facebook_page}}"><i class="fab fa-facebook"></i></a>
                    <a href="{{$movie -> twitter_page}}"><i class="fab fa-twitter"></i></a>
                    <a href="{{$movie -> instagram_page}}"><i class="fab fa-instagram"></i></a>
                    <a href="{{$movie -> website_page}}"><i class="fas fa-globe"></i></a>
                </td>

                <td>{{$movie -> cast}}
                    <hr>
                    {{$movie -> directors}}
                    <hr>
                    {{$movie -> producers}}
                    <hr>
                    {{$movie -> writers}}
                </td>
                <td>{{$movie -> genres}}</td>
                <td><a href="{{route('admin.movies.edit', $movie->id)}}"><i class="fas fa-pen m-2"></i></a>
                    <form action="{{route('admin.movies.destroy', $movie->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bottone_delete" type="submit"><i class="fas fa-trash-alt text-danger m-2"></i></button>
                    </form>
                    <a href="{{route('movie', $movie->id)}}"><i class="far fa-eye text-success m-2"></i></a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="d-flex justify-content-center mt-3">
        {{$movies->links()}}
    </div>





</div>
@endsection