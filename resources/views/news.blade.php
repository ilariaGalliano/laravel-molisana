@extends('layouts/main')

@section('content')

<section class="news-content">
    <div class="container">

        <div class="hero">

            @foreach ($data as $el)
            
            <h1 class="text-center">{{ $el['title'] }}</h1>
            <h3 class="text-center">{{ $el['subtitle'] }}</h3> 


            <div class="description">
                <p>{!! $el['description'] !!}</p>
            </div>

            @endforeach
            
        </div>

       
    
</section>
    
@endsection