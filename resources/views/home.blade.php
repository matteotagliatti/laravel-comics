@extends('templates.app')

@section('title', 'Home')

@section('content')
    <main>
      <div class="jumbotron">
        <img
          class="jumbotron"
          src="{{ asset('img/jumbotron.jpg')}}"
          alt="Jumbotron"
        />
        <div class="container">
          <a href="#">Current Series </a>
        </div>
      </div>

      <div class="container">
        <div class="cards">
            {{-- ComicCard --}}
          
        </div>
        <div class="load-more">
          <a href="#">Load More</a>
        </div>
      </div>
    </main>
    {{-- LinkDiv --}}
    <div id="links">
        <div class="container">
            {{-- Item --}}
          <div >
            <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="image" />
            <span>Digital Comics</span>
          </div>
          {{-- Item --}}
          <div >
            <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="image" />
            <span>DC Merchandise</span>
          </div>
          {{-- Item --}}
          <div >
            <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="image" />
            <span>Subscription</span>
          </div>
          {{-- Item --}}
          <div >
            <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="image" />
            <span>Comic Shop Locator</span>
          </div>
          {{-- Item --}}
          <div >
            <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="image" />
            <span>DC Power Visa</span>
          </div>
        </div>
      </div>
@endsection