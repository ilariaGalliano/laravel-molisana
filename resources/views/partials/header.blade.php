{{-- Header --}}

<header>
    <div class="container">
      <div class="disp-flex">
        <a href="/" class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Molisana">
         </a>
      </div>

      {{-- <div class="disp-flex">
        <a href="/news">News</a>
      </div> --}}

      <nav class="disp-flex">
        <li>
          <a href="{{ route('welcome') }}">HOME</a>
        </li>
        <li>
          <a href="{{ route('news') }}">NEWS</a>
        </li>
        <li>
          <a href="">PRODOTTI</a>
        </li>
      </nav>
          
    </div>      
</header>