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
    <table class="table fixed">
        <thead class="text-secondary">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>series</th>
                <th>sale</th>
                <th>type</th>
                <th>image-url</th>
                <th>tools</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{$comic -> title}}</td>
                <td class="description-comic"><span>{{$comic -> description}}</span></td>
                <td>{{$comic -> price}}</td>
                <td>{{$comic -> series}}</td>
                <td>{{$comic -> sale_date}}</td>
                <td>{{$comic -> type}}</td>
                <td>{{$comic -> thumb}}</td>
                <td><a href="{{route('admin.comics.edit', $comic->id)}}"><i class="fas fa-pen m-2"></i></a>
                    <form action="{{route('admin.comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="bottone_delete" type="submit"><i class="fas fa-trash-alt text-danger m-2"></i></button>
                    </form>
                    <a href="{{route('comic', $comic->id)}}"><i class="far fa-eye text-success m-2"></i></a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="d-flex justify-content-center mt-5">
        {{$comics->links()}}
    </div>





</div>
@endsection