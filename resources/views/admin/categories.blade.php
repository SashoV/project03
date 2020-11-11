@extends('layouts.admin')
@section('content')
<h2>Categories</h2>
<a href="{{ route('createCategory') }}" class="btn btn-primary">Add New Category</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ Str::ucfirst($category->name) }}</td>
                <td>{{ $category->description }}</td>
                <td><img src="{{ asset('storage/'.$category->image) }}" width="120px"></td>
                <td><a href="{{ route('editCategory', $category->id) }}"><span class="glyphicon glyphicon-pencil"
                            aria-hidden="true"></span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection