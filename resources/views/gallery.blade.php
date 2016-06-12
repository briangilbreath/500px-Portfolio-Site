@extends('layouts.master')

@section('title')
{{$data["gallery"]["name"]}} | Brian Gilbreath
@endsection

@section('header')
/ <a href="/photography">Photography</a> / {{$data["gallery"]["name"]}}
@endsection

@section('content')

    <div class="row">

    @include('partials.gallery-listing')

    <div class="col-md-9">
        <div id="gallery">
        @foreach ($data['photos'] as $photo)
            <a href="{{ $photo['image_url'] }}">
                <img src="{{ $photo['image_url'] }}" width="{{ $photo['width'] / 4 }}" height="{{ $photo['height'] / 4}}" alt="{{ $photo['name'] }}">
            </a>
        @endforeach
        </div>
    </div>
</div>

@endsection
