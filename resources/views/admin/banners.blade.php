@extends('layouts.admin')
@section('content')
<h2>Banners</h2>
<a href="{{ route('createBanner') }}" class="btn btn-primary">Add New Banner</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Banner Title</th>
                <th>Description</th>
                <th>Banner URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
            <tr>
                <td>{{ $banner->title}}</td>
                <td>{{ $banner->description}}</td>
                <td>{{ $banner->banner_url }}</td>
                <td><a href="{{ route('editBanner', $banner->id) }}"><span class="glyphicon glyphicon-pencil"
                            aria-hidden="true"></span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection