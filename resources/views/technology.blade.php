@extends('layouts.master')

@section('title', 'Technology Portfolio | Brian Gilbreath')

@section('header')
/ <a href="/technology">Technology</a>
  @if($data["portfolio"] && $data["portfolio"] !== 'intro')
    / {{$data["portfolio"]}}
  @endif
@endsection

@section('content')



<div id="portfolio" class="row">

  @include('partials.portfolio-listing', array($data))


  <div class="col-md-8">

    @if(View::exists('portfolio.'.$data["portfolio"]))
      @include('portfolio.'.$data["portfolio"])
    @else
      Project coming soon.
    @endif

  </div>

</div>


@endsection
