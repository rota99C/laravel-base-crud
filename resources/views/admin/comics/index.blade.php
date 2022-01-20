@extends ('layouts.admin')
@section('page-title', 'Admin')
@section ('content')
<div class="d-grid gap-2">
    <button type="button" class="btn btn-danger"><a href="{{route('admin.comics.create')}}">create</a>
    </button>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>series</th>
            <th>sale date</th>
            <th>type</th>
            <th>image-url</th>
            <th>tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td scope="row">{{$comic -> title}}</td>
            <td>{{$comic -> description}}</td>
            <td>{{$comic -> price}}</td>
            <td>{{$comic -> series}}</td>
            <td>{{$comic -> sale_date}}</td>
            <td>{{$comic -> type}}</td>
            <td>{{$comic -> thumb}}</td>
            <td>edit - delete - view</td>

        </tr>
        @endforeach
    </tbody>

</table>







@endsection