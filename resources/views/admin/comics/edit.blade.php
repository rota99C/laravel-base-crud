@extends('layouts.admin')
@section('content')

<form action="{{route('admin.comics.update', $comic->id)}}" method="post">
    @csrf

    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Comic Title</label>
        <input value="{{$comic->title}}" class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" placeholder="Insert here the title of the comic" aria-describedby="helpId">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="description" class="form-label">Comic Description</label>
        <textarea class="form-control @error('title') is-invalid @enderror" type="text" name="description" id="description" placeholder="Insert here the description of the comic" aria-describedby="helpId">{{$comic->description}}</textarea>
        <small>Make sure you don't exceed 2000 characters, spaces included.</small>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="series" class="form-label">Comic series</label>
        <input value="{{$comic->series}}" class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="series" placeholder="Insert here the serie of the comic" aria-describedby="helpId">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="sale_date" class="form-label">Comic sale date</label>
        <input value="{{$comic->sale_date}}" class="form-control @error('title') is-invalid @enderror" type="date" name="sale_date" id="sale_date" value="2022-01-20" aria-describedby="helpId">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="type" class="form-label">Comic type</label>
        <input value="{{$comic->type}}" class="form-control @error('title') is-invalid @enderror" type="text" name="type" id="type" placeholder="Insert here the type of the comic" aria-describedby="helpId">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="price" class="form-label">Price</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">$</span>
            <input value="{{$comic->price}}" class="form-control @error('title') is-invalid @enderror" type="text" name="price" id="price" placeholder="Insert the price" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="thumb" class="form-label">Image URL</label>
        <input value="{{$comic->thumb}}" class="form-control @error('title') is-invalid @enderror" type="text" name="thumb" id="thumb" placeholder="Insert the image URL" aria-describedby="helpId">
    </div>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-success">Update</button>

</form>


@endsection