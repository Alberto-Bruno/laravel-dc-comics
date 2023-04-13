@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <section id="comics">
        {{-- Main comics top --}}
        <div class="main-comics-top">
            <div class="bg-black">
                <div class="container">
                    <div class="btn-top">
                        <button>Current Series</button>
                    </div>
                    <div class="row">
                        @foreach ($comics as $comic)
                            <div class="comics-series-card">
                                <a href="{{ route('comics.edit', $comic->id) }}">Edit Comic<img src="{{ $comic['thumb'] }}"
                                        alt="{{ $comic['title'] }}"></a>
                                <h6>{{ $comic['series'] }}</h6>
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-forms"
                        data-name="{{ $comic->series }}">
                        @csrf
                        @method('DELETE')
                        <button class="a-button-delete">Delete Comic</button>
                    </form>
                    <div class="btn-bottom">
                        <button>Load More</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Main home bottom --}}
        <div class="main-comics-bottom">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
                            <span>DC MERCHANDISE</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscription">
                            <span>SUBSCRIPTION</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop">
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power visa">
                            <span>DC POWER VISA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
