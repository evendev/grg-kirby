@extends('layouts.master')

@section('main')
    <div class="page-header">
        <h1>{{ $page->title() }}</h1>
    </div>

    <div class="places">
    @foreach ($page->children()->visible() as $item)
        <div class="panel panel-textured" id="{{ $item->uid() }}">
            <div class="panel-body">
                <h2 class="panel-title">{{ $item->title() }}</h2>
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="list-inline place-contact-info">
                            <li>
                                {{ $item->phoneNumber() }}
                            </li>
                            <li>
                                @if ($item->website()->isNotEmpty())
                                    <a href="{{ $item->website() }}" target="_blank">
                                        Visit Website
                                    </a>
                                @endif
                            </li>
                        </ul>
                        <div class="lead">
                            {!! $item->text()->kirbytext() !!}
                        </div>
                        @if ($item->address()->isNotEmpty())
                        <p class="place-address">
                            <i class="fa fa-map-marker"></i>
                            {{ $item->address() }}
                            <a href="{{ $item->gmapUrl() }}" target="_blank">
                                Map 
                                <i class="fa fa-external-link"></i>
                            </a>
                        </p>
                        @endif
                        <p>
                            @include('places/socials')
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ thumb( $item->posterImage(), ['width' => 680, 'height' => 440, 'crop' => true] )->url() }}" alt="{{ $item->title() }}" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@stop