@extends('layouts.admin')
<div class="d-flex title_edit justify-content-center pt-4 pb-4">
    <i class="fas fa-plus display-6 ms-3 me-3 text-success"></i>
    <h3>Create a Comic</h3>
</div>

<form action="{{route('admin.comics.store')}}" method="post">
    @csrf

    <div class="mb-4 ms-4 me-4">
        <label for="title" class="form-label mb-2 text-secondary"><strong>Comic Title</strong> </label>
        <input value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror mb-4" type="text" name="title" id="title" placeholder="Insert here the title of the comic" aria-describedby="helpId">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="description" class="form-label text-secondary"><strong>Comic Description</strong> </label>
        <textarea class="form-control @error('title') is-invalid @enderror" type="text" name="description" id="description" placeholder="Insert here the description of the comic" aria-describedby="helpId">{{old('description')}}</textarea>
        <small>Make sure you don't exceed 2000 characters, spaces included.</small>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="series" class="form-label mb-2 mt-4 text-secondary"><strong>Comic series</strong> </label>
        <input value="{{old('series')}}" class="form-control @error('series') is-invalid @enderror mb-4" type="text" name="series" id="series" placeholder="Insert here the serie of the comic" aria-describedby="helpId">
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="sale_date" class="form-label mb-2 text-secondary"><strong>Comic sale date</strong> </label>
        <input value="{{old('sale_date')}}" class="form-control @error('sale_date') is-invalid @enderror mb-4" type="date" name="sale_date" id="sale_date" value="2022-01-20" aria-describedby="helpId">
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="type" class="form-label mb-2 text-secondary"><strong>Comic type</strong> </label>
        <input value="{{old('type')}}" class="form-control @error('type') is-invalid @enderror mb-4" type="text" name="type" id="type" placeholder="Insert here the type of the comic" aria-describedby="helpId">
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="price" class="form-label mb-2 text-secondary"><strong>Price</strong> </label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">$</span>
            <input value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" placeholder="Insert the price" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="thumb" class="form-label mb-2 text-secondary"><strong>Image URL</strong> </label>
        <input value="{{old('thumb')}}" class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb" placeholder="Insert the image URL" aria-describedby="helpId">
    </div>
    @error('thumb')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>


</form>