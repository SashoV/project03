@extends('layouts.admin')
@section('content')
<h2>Create Lecture</h2>
<div class="col-md-6">
    <form action="{{ route('storeLecture') }}" method="POST">
        @csrf
        <div class="form-group @error('category_id') has-error @enderror">
            <label for="category">Choose Category</label>
            <select class="form-control" name="category_id">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if ($category->id == old('category_id'))
                    {{ "selected" }}
                    @endif>{{ Str::ucfirst($category->name) }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group @error('title') has-error @enderror">
            <label for="title">Lecture Title</label>
            <input type="text" class="form-control" id="title" placeholder="Lecture Title" name="title"
                value="{{ old('title') }}">
        </div>
        <div class="form-group @error('description') has-error @enderror">
            <label for="description">Description</label>
            <textarea class="form-control" rows="5" id="description"
                name="description">{{ old('description') }}</textarea>
            <p class="help-block">Max characters: 150</p>
        </div>
        <div class="form-group @error('date_added') has-error @enderror">
            <label for="date">Date Added:</label>
            <input type="date" class="form-control" id="date" name="date_added" value="{{ old('date_added') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('adminLectures') }}" class="btn btn-default">Back</a>
    </form>
</div>
@endsection