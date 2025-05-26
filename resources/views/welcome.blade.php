@extends('layouts.layouts')

@section('content')
    {{-- Hero Section --}}
    @include('herosection')

    {{-- About me section --}}
    @include('aboutme')

    {{-- Resume section --}}
    @include('resume-section')

    {{-- My services section --}}
    @include('services-section')

    {{-- Contact section --}}
    @include('contact')
@endsection
