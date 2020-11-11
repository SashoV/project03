@extends('layouts.admin')
@section('content')
<h2>Edit Banner</h2>
<div class="col-md-6">
    <form action="{{ route('updateBanner', $banner->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group @error('title') has-error @enderror">
            <label for="title">Baner Title</label>
            <input type="text" class="form-control" id="title" name="title"
                value="@if(old('title') == ''){{ $banner->title }} @else {{ old('title') }} @endif">
        </div>
        <div class="form-group @error('description') has-error @enderror">
            <label for="description">Description</label>
            <textarea class="form-control" rows="5" id="description"
                name="description">@if(old('description') == ''){{ $banner->description }} @else {{ old('description') }} @endif</textarea>
            <p class="help-block">Max characters: 150</p>
        </div>
        <div class="form-group @error('banner_url') has-error @enderror">
            <label for="banner_url">Baner URL</label>
            <input type="text" class="form-control" id="banner_url" name="banner_url"
                value="@if(old('banner_url') == ''){{ $banner->banner_url }} @else {{ old('banner_url') }} @endif">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('adminBanners') }}" class="btn btn-default">Back</a>
    </form>
</div>
@endsection