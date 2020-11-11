@extends('layouts.admin')
@section('content')
<h2>Create Category</h2>
<div class="col-md-6">
    <form action="{{ route('storeCategory') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group @error('name') has-error @enderror">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" placeholder="Category Name" name="name"
                value="{{ old('name') }}">
        </div>
        <div class="form-group @error('description') has-error @enderror">
            <label for="description">Description</label>
            <textarea class="form-control" rows="5" id="description" name="description">{{ old('description') }}</textarea>
            <p class="help-block">Max characters: 400</p>
        </div>
        <div class="form-group @error('image') has-error @enderror">
            <label for="image">Category Image</label><br>
        <img src="{{ asset('img/no_preview.png') }}" width="120px" id="previewImg"><br><br>
            <input type="file" id="image" name="image" onchange="previewFile(this);">
            <p class="help-block">Max size: 5MB</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('adminCategories') }}" class="btn btn-default">Back</a>
    </form>
</div>
@endsection