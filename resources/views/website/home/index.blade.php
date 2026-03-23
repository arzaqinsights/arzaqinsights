@extends('layouts.app')

@section('content')
    @include('website.home.partials.hero')
    @include('website.home.partials.services')
    @include('website.home.partials.about-snippet')
    @include('website.home.partials.portfolio-snippet')
    @include('website.home.partials.cta')
@endsection