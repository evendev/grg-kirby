@extends('layouts.master')

@section('main')
    <div class="page-header">
        <h1>{{ $page->title() }}</h1>
    </div>

    <div class="places">
    @foreach ($page->children()->visible() as $item)
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">{{ $item->title() }}</div>
            </div>
            <div class="panel-body">
                {!! $item->text()->kirbytext() !!}
                @if ($item->facebookUrl()->isNotEmpty())
                    <a href="{{ $item->facebookUrl() }}" target="_blank">
                        <i class="fa fa-facebook-square icon-lg"></i>
                    </a>
                @endif
                @if ($item->twitterUrl()->isNotEmpty())
                    <a href="{{ $item->twitterUrl() }}" target="_blank">
                        <i class="fa fa-twitter-square icon-lg"></i>
                    </a>
                @endif
                @if ($item->instagramUrl()->isNotEmpty())
                    <a href="{{ $item->instagramUrl() }}" target="_blank">
                        <i class="fa fa-instagram icon-lg"></i>
                    </a>
                @endif
            </div>
            <div class="list-group">
            @if ($item->address()->isNotEmpty())
                <a href="{{ $item->gmapUrl() }}" class="list-group-item">
                    {{ $item->address() }}
                </a>
            @endif
            @if ($item->phone()->isNotEmpty())
                <a class="list-group-item" href="tel:{{ $item->phone() }}">
                    {{ $item->phone() }}
                </a>
            @endif
            @if ($item->phoneTollFree()->isNotEmpty())
                <a class="list-group-item" href="tel:{{ $item->phoneTollFree() }}">
                    {{ $item->phoneTollFree() }}
                </a>
            @endif
            @if ($item->website()->isNotEmpty())
                <a class="list-group-item" href="{{ $item->website() }}" target="_blank">
                    Visit Website
                </a>
            @endif
            </div>
        </div>
    @endforeach
    </div>
@stop