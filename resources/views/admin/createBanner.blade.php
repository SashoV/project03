@extends('layouts.admin')
@section('content')
<h2>Create Banner</h2>
<div class="col-md-6">
    <form action="{{ route('storeBanner') }}" method="POST">
        @csrf
        <div class="form-group @error('title') has-error @enderror">
            <label for="title">Baner Title</label>
            <input type="text" class="form-control" id="title" placeholder="Banner Title" name="title"
                value="{{ old('title') }}">
        </div>
        <div class="form-group @error('description') has-error @enderror">
            <label for="description">Description</label>
            <textarea class="form-control" rows="5" id="description"
                name="description">{{ old('description') }}</textarea>
            <p class="help-block">Max characters: 150</p>
        </div>
        <div class="form-group @error('banner_url') has-error @enderror">
            <label for="banner_url">Baner URL</label>
            <input type="text" class="form-control" id="banner_url" placeholder="Banner URL" name="banner_url"
                value="{{ old('banner_url') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('adminBanners') }}" class="btn btn-default">Back</a>
    </form>
</div>
@endsection