@extends('layouts/main')

@section('content')

<section class="prod-content">
    <div class="container">

        <div class="hero">
            <h1 class="text-center">Prodotti disponibili: </h1>      
        </div>
        
        <div class="products">
            @foreach ($data as $type)
                <div class="type">
                    <h4 class="text-center">{{ $type['title'] }}</h4>
                    <img src="{{ $type['img'] }}" alt="{{ $type['title'] }}">
                </div>
            @endforeach
        </div>
            
    </div>    
</section>

@endsection
