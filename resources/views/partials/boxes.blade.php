@if (! empty($boxes))
     <section class="section-type container">
        <h2>{{ $title }}</h2>

        <div class="boxes">
            @foreach ($boxes as $box)
                <div class="box">
                    <img src="{{ $box['src'] }}" alt="{{ $box['titolo'] }}">
                    <h3>{{ $box['titolo'] }}</h3>
                    <a href="{{ route('product', $box['id']) }}">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </section>

@endif