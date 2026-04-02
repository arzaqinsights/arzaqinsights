@extends('layouts.app')

@section('content')
    @include('website.contact.partials.hero')
    <div class="bg-brand-white pb-24" data-theme="light">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                @include('website.contact.partials.info')
                @include('website.contact.partials.form')
            </div>
        </div>
    </div>
@endsection
