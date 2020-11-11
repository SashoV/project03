@extends('layouts.admin')
@section('content')
<h2>Mailing List</h2>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emails as $email)
            <tr>
                <td>{{ $email->email }}</td>
                @if ($email->category_id == "")
                <td>/</td>
                @else
                <td>{{ Str::ucfirst($email->category->name) }}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $emails->links() }}
@endsection