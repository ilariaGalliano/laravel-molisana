{{-- Header --}}

<header>
    <div class="container">
      <div class="disp-flex">
        <a href="{{ route('welcome')}}" class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Molisana">
         </a>
      </div>

      <nav class="disp-flex desktop-only">
        <li>
          <a href="{{ route('welcome')}}">Home</a>
        </li>
        <li>
          <a href="{{ route('product-page') }}" target="_blank">Prodotti</a>
        </li>
        <li>
          <a href="{{ route('news') }}" target="_blank">News</a>
        </li>
      </nav>

      <nav class="disp-flex mobile-only">
          <li>
            <i @click="isActive = !isActive" class="fas fa-bars"></i>
          </li>

          {{-- Toggle menu --}}
            <div v-if="isActive" class="toggle-menu disp-flex">
                <li>
                  <a href="{{ route('welcome')}}">Home</a>
                </li>
                <li>
                  <a href="{{ route('product-page') }}">Prodotti</a>
                </li>
                <li>
                  <a href="{{ route('news') }}">News</a>
                </li>
            </div>

      </nav>
          
    </div>      
</header>

