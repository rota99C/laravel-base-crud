@extends('layouts.admin')
@section('content')

<form action="{{route('admin.comics.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Comic Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Insert here the title of the comic" aria-describedby="helpId">

        <label for="description" class="form-label">Comic Description</label>
        <textarea type="text" name="description" id="description" class="form-control" placeholder="Insert here the description of the comic" aria-describedby="helpId"></textarea>
        <small>Make sure you don't exceed 2000 characters, spaces included.</small>
        <br>
        <label for="series" class="form-label">Comic series</label>
        <input type="text" name="series" id="series" class="form-control" placeholder="Insert here the serie of the comic" aria-describedby="helpId">

        <label for="sale_date" class="form-label">Comic sale date</label>
        <input type="date" name="sale_date" id="sale_date" class="form-control" value="2022-01-20" aria-describedby="helpId">

        <label for="type" class="form-label">Comic type</label>
        <input type="text" name="type" id="type" class="form-control" placeholder="Insert here the type of the comic" aria-describedby="helpId">

        <label for="price" class="form-label">Price</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">$</span>
            <input type="text" name="price" id="price" class="form-control" placeholder="Insert the price" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <label for="thumb" class="form-label">Image URL</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Insert the image URL" aria-describedby="helpId">
    </div>

    <button type="submit" class="btn btn-success">Save</button>

</form>


@endsection