@extends('layouts/main')

@section('content')


@include('partials.boxes', ['boxes' => $lunghe, 'title' => 'le lunghe']);

@include('partials.boxes', ['boxes' => $corte, 'title' => 'le corte']);

@include('partials.boxes', ['boxes' => $cortissime, 'title' => 'le cortissime']);


@endsection


    {{-- <section class="section-type container">
        <h2>Le Lunghe</h2>

        <div class="boxes">
            @foreach ($lunghe as $box)
                <div class="box">
                    <img src="{{ $box['src'] }}" alt="{{ $box['titolo'] }}">
                    <h3>{{ $box['titolo'] }}</h3>
                    <a href="{{ route('product', $box['id']) }}">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section-type container">
        <h2>Le Corte</h2>

        <div class="boxes">
            @foreach ($corte as $box)
                <div class="box">
                    <img src="{{ $box['src'] }}" alt="{{ $box['titolo'] }}">
                    <h3>{{ $box['titolo'] }}</h3>
                    <a href="{{ route('product', $box['id']) }}">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section-type container">
        <h2>Le Cortissime</h2>

        <div class="boxes">
            @foreach ($cortissime as $box)
                <div class="box">
                    <img src="{{ $box['src'] }}" alt="{{ $box['titolo'] }}">
                    <h3>{{ $box['titolo'] }}</h3>
                    <a href="{{ route('product', $box['id']) }}">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </section> --}}

  {{-- <section class="container">
    <div class="boxes">
        @foreach ($boxes as $box)
            <div class="box">
                <img src="{{ $box['src'] }}" alt="{{ $box['titolo'] }}">
                <h3>{{ $box['titolo'] }}</h3>
                <a href="#">Vedi prodotto</a>
            </div>
        @endforeach
    </div>
  </section>  --}}



