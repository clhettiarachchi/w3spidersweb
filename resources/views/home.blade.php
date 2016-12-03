@extends('templates.default')

@section('content')
    @include('layouts.header')
@stop

@section('rsslider')
    @include('layouts.rs-slider')
@stop

@section('banner')
    @include('layouts.banner')
@stop
@section('main')
    @include('layouts.main')
@stop

@section('sitefooter')
    @include('layouts.sitefooter')
@stop