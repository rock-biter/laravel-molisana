<header class="main-header">
  <a href="/" class="brand">
      <img src="{{ asset('img/logo.png') }}" alt="La Molisana" />
  </a>

  @php 

    $links = [
      [
        'text' => 'Home',
        'routeName' => 'home'
      ],
      [
        'text' => 'Prodotti',
        'routeName' => 'prodotti',
        // 'href' => '/pippo/prodotti'
      ],
      [
        'text' => 'Sostenibilita',
        'routeName' => 'sostenibilita'
      ],
      [
        'text' => 'Contatti',
        'routeName' => 'contatti'
      ],
    ];
  @endphp

  <nav>
      <ul>
        @foreach($links as $link)
          <!-- il primo giorno facciamo vedere come popolare il menu dinamicamente usando un array in data() -->
          <li>
              <a 
                href="{{ isset($link['routeName']) ? route($link['routeName']) : '/' }}" 
                class="{{ Route::currentRouteName() === $link['routeName'] ? 'active' : '' }}">
                  {{ $link['text'] }}
              </a>
          </li>
        @endforeach
        {{-- @dump(Request::route()->getName())
        @dump(Route::currentRouteName()) --}}
        {{-- <li>
          <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
              Home
          </a>
        </li>
        <li>
          <a href="{{ route('prodotti') }}" class="{{ Route::currentRouteName() === 'prodotti' ? 'active' : '' }}">
              Prodotti
          </a>
        </li>
        <li>
          <a href="{{ route('sostenibilita') }}" class="{{ Route::currentRouteName() === 'sostenibilita' ? 'active' : '' }}">
              sostenibilità
          </a>
        </li>
        <li>
          <a href="{{ route('contatti') }}" class="{{ Route::currentRouteName() === 'contatti' ? 'active' : '' }}">
              Contatti
          </a>
        </li> --}}

      </ul>
  </nav>
</header>