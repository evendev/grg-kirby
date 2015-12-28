@extends('layouts.master')

@section('main')
    <h1 class="page-header">{{ c::get('email.to') }}</h1>
    <div id="gmap--home" class="gmap gmap--full"></div>
@stop

@section('foot')
<script>
var places = {!! $page->placesJson() !!};
$(document).ready(function() {
    var map = new GMaps({
        div: '#gmap--home',
        lat: 35.2383453,
        lng: -82.3519132,
        zoom: 10,
        scrollwheel: false
    });
    // console.log(places);
    $.each(places, function(i, place) {
        var image = {};
        switch (place.collection) {
            case 'Attraction':
                image.url = 'http://maps.google.com/mapfiles/ms/icons/green-dot.png';
                break;
            case 'Lodging':
                image.url = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
                break;
            case 'Restaurant':
                image.url = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
                break;
        }

        var url = place.collectionUrl + '#' + place.uid;

        map.addMarker({
            lat: place.location.lat,
            lng: place.location.lng,
            title: place.title,
            icon: image,
            infoWindow: {
                content: '<p><b><a href="' + url + '">' + place.title + '</a></b></p>' + 
                         '<p><a href="' + place.collectionUrl + '">' + place.collection + '</a></p>' +
                         '<p>' + place.phone + '</p>'
            }
        });
    });
});
</script>
@stop