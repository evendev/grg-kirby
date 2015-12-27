@extends('layouts.master')

@section('main')
    <div class="page-header">
        <h1>{{ $page->title() }}</h1>
    </div>
    <div class="panel panel-textured">
        <div class="panel-body">
            {!! $page->text()->kirbytext() !!}
        </div>
    </div>
@stop