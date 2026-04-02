@extends('layouts.app')

@section('content')
    @include('website.about.partials.hero')
    @include('website.about.partials.stats')
    @include('website.about.partials.mission')
    @include('website.about.partials.team')
    @include('website.home.partials.cta')
@endsection
