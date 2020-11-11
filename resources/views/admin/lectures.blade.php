@extends('layouts.admin')
@section('content')
<h2>Lectures</h2>
<a href="{{ route('createLecture') }}" class="btn btn-primary">Add New Lecture</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Lecture Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lectures as $lecture)
            <tr>
                <td>{{ $lecture->title}}</td>
                <td>{{ $lecture->description}}</td>
                <td>{{ Str::ucfirst($lecture->category->name)}}</td>
                <td>{{ $lecture->date_added}}</td>
                <td>
                    <form action="{{ route('deleteLecture', $lecture->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><span class="glyphicon glyphicon-trash"
                                aria-hidden="true"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $lectures->links() }}
@endsection