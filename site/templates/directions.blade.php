@extends('layouts.master')

@section('main')
    <div class="page-header">
        <h1>{{ $page->title() }}</h1>
    </div>
    <div class="panel panel-textured">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>{{ $page->lead() }}</h2>
                    {!! $page->text()->kirbytext() !!}  
                    <div class="gmap" id="gmap--directions"></div>
                    <p class="lead">
                        <a href="https://www.google.com/maps/place/Saluda+NC+28773" target="_blank">Get directions on Google Maps &raquo;</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('foot')
<script>
var map = new GMaps({
    div: '#gmap--directions',
    lat: 35.2383453,
    lng: -82.3519132,
    zoom: 11,
    scrollwheel: false
});
map.addMarker({
    lat: 35.2383453,
    lng: -82.3519132,
    title: "Saluda, NC"
})
</script>
@stop