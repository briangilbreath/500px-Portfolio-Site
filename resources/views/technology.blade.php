@extends('layouts.master')

@section('title', 'Technology Portfolio| Brian Gilbreath')

@section('header')
/ <a href="/technology">Technology</a>
  @if($data["portfolio"])
    / {{$data["portfolio"]}}
  @endif
@endsection

@section('content')



<div id="portfolio" class="row">

  <div class="col-md-3">
    @include('partials.portfolio-listing')
  </div>

  <div class="col-md-8">

    @if(View::exists('portfolio.'.$data["portfolio"]))
      @include('portfolio.'.$data["portfolio"])
    @else
      Project Not Found
    @endif

  </div>

</div>


@endsection
