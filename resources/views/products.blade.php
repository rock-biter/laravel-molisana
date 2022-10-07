@extends('layouts.app')

@section('metaTitle','Tutti i nostri prodotti.')

@section('content')

<section class="products">
  <!-- il primo giorno stampiamo solo il titolo -->
  <h1>Lista Prodotti: {{ $app_name }}</h1>

  <div class="boxes container">
      <!-- il secondo giorno creiamo il componente ProductCard e stampiamo la lista di prodotti -->
      @forelse($products as $pasta)
        <div class="prod-card">
            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}" />
            <h3>{{ $pasta['titolo'] }}</h3>
        </div>
      @empty
          <p>non ci sono proditti</p>
      @endempty
  </div>
</section>

@endsection