<div class="sidebar col-md-3">
<nav>
@foreach ($galleries as $gallery)
    <li class="{{ set_active('photography/'.$gallery['id']) }}">
        <a href="/photography/{{$gallery['id']}}">{{ $gallery['name'] }}</a>
    </li>
@endforeach
</nav>
</div>
