@extends('layouts.admin')
<div class="d-flex title_edit justify-content-center pt-4 pb-4">
    <i class="fas fa-plus display-6 ms-3 me-3 text-success"></i>
    <h3>Create a Character</h3>
</div>

<form action="{{route('admin.characters.store')}}" method="post">
    @csrf

    <div class="mb-4 ms-4 me-4">
        <label for="name" class="form-label mb-2 text-secondary"><strong>Character Name</strong> </label>
        <input value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror mb-4" type="text" name="name" id="name" placeholder="Insert here the name of the character" aria-describedby="helpId">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="description" class="form-label text-secondary"><strong>Character Description</strong> </label>
        <textarea class="form-control @error('title') is-invalid @enderror" type="text" name="description" id="description" placeholder="Insert here the description of the character" aria-describedby="helpId">{{old('description')}}</textarea>
        <small>Make sure you don't exceed 2000 characters, spaces included.</small>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="image_thumb" class="form-label mb-2 mt-4 text-secondary"><strong>Image thumb URL</strong> </label>
        <input value="{{old('image_thumb')}}" class="form-control @error('image_thumb') is-invalid @enderror mb-4" type="text" name="image_thumb" id="image_thumb" placeholder="Insert the image URL" aria-describedby="helpId">
        @error('image_thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="image_cover" class="form-label mb-2 text-secondary"><strong>Image cover URL</strong> </label>
        <input value="{{old('image_cover')}}" class="form-control @error('image_cover') is-invalid @enderror mb-4" type="text" name="image_cover" id="image_cover" placeholder="Insert the image URL" aria-describedby="helpId">
        @error('image_cover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="facebook_page" class="form-label mb-2 text-secondary"><strong>facebook URL</strong> </label>
        <input value="{{old('facebook_page')}}" class="form-control @error('facebook_page') is-invalid @enderror mb-4" type="text" name="facebook_page" id="facebook_page" placeholder="" aria-describedby="helpId">
        @error('facebook_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="instagram_page" class="form-label mb-2 text-secondary"><strong>instagram URL</strong> </label>
        <input value="{{old('instagram_page')}}" class="form-control @error('instagram_page') is-invalid @enderror mb-4" type="text" name="instagram_page" id="instagram_page" placeholder="" aria-describedby="helpId">
        @error('instagram_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="twitter_page" class="form-label mb-2 text-secondary"><strong>twitter URL</strong> </label>
        <input value="{{old('twitter_page')}}" class="form-control @error('twitter_page') is-invalid @enderror mb-4" type="text" name="twitter_page" id="twitter_page" placeholder="" aria-describedby="helpId">
        @error('twitter_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="video_page" class="form-label mb-2 text-secondary"><strong>video URL</strong> </label>
        <input value="{{old('video_page')}}" class="form-control @error('video_page') is-invalid @enderror mb-4" type="text" name="video_page" id="video_page" placeholder="" aria-describedby="helpId">
        @error('video_page')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="powers" class="form-label mb-2 text-secondary"><strong>powers</strong> </label>
        <input value="{{old('powers')}}" class="form-control @error('powers') is-invalid @enderror mb-4" type="text" name="powers" id="powers" placeholder="" aria-describedby="helpId">
        @error('powers')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="first_appearance" class="form-label mb-2 text-secondary"><strong>first_appearance</strong> </label>
        <input value="{{old('first_appearance')}}" class="form-control @error('first_appearance') is-invalid @enderror mb-4" type="text" name="first_appearance" id="first_appearance" placeholder="" aria-describedby="helpId">
        @error('first_appearance')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="alter_ego" class="form-label mb-2 text-secondary"><strong>alter_ego</strong> </label>
        <input value="{{old('alter_ego')}}" class="form-control @error('alter_ego') is-invalid @enderror mb-4" type="text" name="alter_ego" id="alter_ego" placeholder="" aria-describedby="helpId">
        @error('alter_ego')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <label for="occupation" class="form-label mb-2 text-secondary"><strong>occupation</strong> </label>
        <input value="{{old('occupation')}}" class="form-control @error('occupation') is-invalid @enderror mb-4" type="text" name="occupation" id="occupation" placeholder="" aria-describedby="helpId">
        @error('occupation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror


    </div>



    </div>


    <div class="d-flex justify-content-center mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>


</form>