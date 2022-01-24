@extends('layouts.admin')
<div class="d-flex title_edit justify-content-center pt-4 pb-4">
    <i class="fas fa-edit display-6 ms-3 me-3 text-primary"></i>
    <h3>Edit Movie</h3>
</div>

<form action="{{route('admin.movies.update', $movie->id)}}" method="post">
    @csrf

    @method('PUT')

    <div class="mb-4 ms-4 me-4">
        <label for="title" class="form-label mb-2 text-secondary"><strong>Comic Title</strong> </label>
        <input value="{{$movie->title}}" class="form-control @error('title') is-invalid @enderror mb-4" type="text" name="title" id="title" placeholder="Insert here the title of the movie" aria-describedby="helpId">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="description" class="form-label text-secondary"><strong>Comic Description</strong> </label>
        <textarea class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description" placeholder="Insert here the description of the movie" aria-describedby="helpId">{{$movie->description}}</textarea>
        <small>Make sure you don't exceed 2000 characters, spaces included.</small>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <br>
        <label for="year" class="form-label mb-2 mt-4 text-secondary"><strong>movie year</strong> </label>
        <input value="{{$movie->year}}" class="form-control @error('year') is-invalid @enderror mb-4" type="text" name="year" id="year" aria-describedby="helpId">
        @error('year')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="image_thumb" class="form-label mb-2 text-secondary"><strong>Image thumb URL</strong> </label>
        <input value="{{$movie->image_thumb}}" class="form-control @error('image_thumb') is-invalid @enderror mb-4" type="text" name="image_thumb" id="image_thumb" placeholder="Insert the image URL" aria-describedby="helpId">
        @error('image_thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="image_cover" class="form-label mb-2 text-secondary"><strong>Image cover URL</strong> </label>
        <input value="{{$movie->image_cover}}" class="form-control @error('image_cover') is-invalid @enderror mb-4" type="text" name="image_cover" id="image_cover" placeholder="Insert the image URL" aria-describedby="helpId">
        @error('image_cover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="facebook_page" class="form-label mb-2 text-secondary"><strong>facebook URL</strong> </label>
        <input value="{{$movie->facebook_page}}" class="form-control @error('facebook_page') is-invalid @enderror mb-4" type="text" name="facebook_page" id="facebook_page" placeholder="" aria-describedby="helpId">
        @error('facebook_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="instagram_page" class="form-label mb-2 text-secondary"><strong>instagram URL</strong> </label>
        <input value="{{$movie->instagram_page}}" class="form-control @error('instagram_page') is-invalid @enderror mb-4" type="text" name="instagram_page" id="instagram_page" placeholder="" aria-describedby="helpId">
        @error('instagram_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="twitter_page" class="form-label mb-2 text-secondary"><strong>twitter URL</strong> </label>
        <input value="{{$movie->twitter_page}}" class="form-control @error('twitter_page') is-invalid @enderror mb-4" type="text" name="twitter_page" id="twitter_page" placeholder="" aria-describedby="helpId">
        @error('twitter_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="website_page" class="form-label mb-2 text-secondary"><strong>website URL</strong> </label>
        <input value="{{$movie->website_page}}" class="form-control @error('website_page') is-invalid @enderror mb-4" type="text" name="website_page" id="website_page" placeholder="" aria-describedby="helpId">
        @error('website_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="cast" class="form-label mb-2 text-secondary"><strong>cast</strong> </label>
        <input value="{{$movie->cast}}" class="form-control @error('cast') is-invalid @enderror mb-4" type="text" name="cast" id="cast" placeholder="" aria-describedby="helpId">
        @error('cast')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="directors" class="form-label mb-2 text-secondary"><strong>Directors</strong> </label>
        <input value="{{$movie->directors}}" class="form-control @error('directors') is-invalid @enderror mb-4" type="text" name="directors" id="directors" placeholder="" aria-describedby="helpId">
        @error('directors')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="producers" class="form-label mb-2 text-secondary"><strong>Producers</strong> </label>
        <input value="{{$movie->producers}}" class="form-control @error('producers') is-invalid @enderror mb-4" type="text" name="producers" id="producers" placeholder="" aria-describedby="helpId">
        @error('producers')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="writers" class="form-label mb-2 text-secondary"><strong>Writers</strong> </label>
        <input value="{{$movie->writers}}" class="form-control @error('writers') is-invalid @enderror mb-4" type="text" name="writers" id="writers" placeholder="" aria-describedby="helpId">
        @error('writers')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="genres" class="form-label mb-2  text-secondary"><strong>Comic genres</strong> </label>
        <input value="{{$movie->genres}}" class="form-control @error('genres') is-invalid @enderror mb-4" type="text" name="genres" id="genres" placeholder="Insert here the genres Movie" aria-describedby="helpId">
        @error('genres')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


    </div>
    <div class="d-flex justify-content-center mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>



</form>