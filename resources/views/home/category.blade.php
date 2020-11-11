@extends('layouts.master')
@section('title')
{{ Str::ucfirst($category->name) }} | Case Studies X
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 lectures">
            @foreach ($category->lectures as $lecture)
            <div class="col-md-12 banner">
                <div>
                <span class="index">#{{ $lecture->index }}</span>
                    <span class="lecture-title"><b>{{ $lecture->title }}</b></span>
                    <span class="date">{{ \Carbon\Carbon::parse($lecture->date_added)->format('F d,Y') }}</span>
                </div>
                <p class="lecture-desc">{{ $lecture->description }}</p>
            </div>
            @endforeach
        </div>

        <div class="col-md-4 banners">
            @foreach ($banners as $banner)
            <div class="col-md-12 banner">
                <h4><b>{{ $banner->title }}</b></h4>
                <p>{{ $banner->description }}</p>
                <a href="{{ $banner->banner_url }}" target="_blank" class="btn btn-default btn-custom flex">Повеќе<span
                        class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection