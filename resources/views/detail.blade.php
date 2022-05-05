@extends('templates.app')

@section('title', 'Detail')
@section('comics_active', 'active')

@section('content')
    <main>
        @include('partials.jumbotron')

        <div class="container title-container">
            <a class="title"> Detail </a>
        </div>

        @dump($comic)
    </main>
@endsection
