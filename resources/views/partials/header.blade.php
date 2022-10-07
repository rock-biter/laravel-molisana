<header class="main-header">
  <a href="/" class="brand">
      <img src="{{ asset('img/logo.png') }}" alt="La Molisana" />
  </a>

  @php 

    $links = [
      [
        'text' => 'Home',
      ],
      [
        'text' => 'Prodotti',
      ],
      [
        'text' => 'Chi siamo',
      ],
      [
        'text' => 'Contatti',
      ],
    ];
  @endphp

  <nav>
      <ul>
        @foreach($links as $link)
          <!-- il primo giorno facciamo vedere come popolare il menu dinamicamente usando un array in data() -->
          <li>
              <a class="{{ $loop->first ? 'active' : '' }}">
                  {{ $link['text'] }}
              </a>
          </li>
        @endforeach
      </ul>
  </nav>
</header>