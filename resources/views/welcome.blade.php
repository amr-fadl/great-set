@extends('layout.app')

@section('content')
    <!-- Banner -->
    @include('home.banner')

    <!-- Passion -->
    @include('home.passion')

    <!-- Products -->
    @include('home.products')

    <!-- About -->
    @include('home.about')

    <!-- Solutions -->
    @include('home.solutions')

    <!-- Contact -->
    @include('home.contact')
@endsection
