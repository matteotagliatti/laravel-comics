@extends('templates.app')

@section('title', 'Detail')
@section('comics_active', 'active')

@section('content')
    <main class="white-bg">
        @include('partials.jumbotron')

        <div class="thumb-container">
            <div class="container">
                <div class="img-container">

                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <span class="type"> {{ $comic['type'] }}</span>
                    <span class="gallery">View Gallery</span>
                </div>
            </div>
        </div>

        <div class="container">
            {{-- Info --}}
            <div class="grid">
                {{-- Left --}}
                <div class="left">
                    <h2>{{ $comic['title'] }}</h2>
                    <div class="green-bg price-container">
                        <div class="price">
                            <p>U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></p>
                            <p class="mr">Avaiable</p>
                        </div>
                        <p class="text-white avaiable">Check Avaiable</p>
                    </div>
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
                {{-- Right --}}
                <div class="right">
                    <span>Advertisement</span>
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
    @endsection
