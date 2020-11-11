@extends('layouts.admin')
@section('content')
<h2>Edit Category</h2>
<div class="col-md-6">
    <form action="{{ route('updateCategory', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group @error('description') has-error @enderror">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="5"
                id="description">@if(old('description') == ''){{ $category->description }} @else {{ old('description') }} @endif</textarea>
            <p class="help-block">Max characters: 400</p>
        </div>
        <div class="form-group @error('image') has-error @enderror">
            <label for="image">Category Image</label><br>
            <img src="{{ asset('storage/'.$category->image) }}" width="120px" id="previewImg"><br><br>
            <input type="file" id="image" name="image" onchange="previewFile(this);">
            <p class="help-block">Max size: 5MB</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('adminCategories') }}" class="btn btn-default">Back</a>
    </form>
</div>
@endsection