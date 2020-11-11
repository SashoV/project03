@extends('layouts.master')

@section('title')
Home | Case Studies X
@endsection

@section('content')
<div class="container card-container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-sm-6 col-md-4 card">
            <a href="{{ route('category', $category->id) }}">
                <div class="thumbnail padding-0">
                    <div class="thumbImage" style="background-image: url('{{ asset('storage/'.$category->image) }}')">
                    </div>
                    <div class="caption">
                        <h4><b>{{ Str::ucfirst($category->name) }}</b></h4>
                        <p>{{ $category->description }}</p>
                    </div>
                    <div class="thumbnail-footer count">
                        <div class=""><b>{{ $category->lectures->count() }}
                                @if($category->lectures->count() == 1) <small>лекциja</small> @else
                                <small>лекции</small> @endif</b></div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection