@extends('layouts.master')

@section('title')
Photography | Brian Gilbreath
@endsection

@section('header')
/ Photography
@endsection


@section('content')

    <div class="row">

        @include('partials.gallery-listing')

        <div class="col-md-9">
            <img src="/img/photography/briangilbreath_photographer.jpg">
        </div>

    </div>

@endsection
