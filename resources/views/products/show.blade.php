@extends('layouts.app')

@section('metaTitle',$pasta['titolo'].' - ' . 'La Molisana')

@section('content')

  {{-- @dump($pasta) --}}
  <div class="container">

    <div>
      <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
    </div>

    <h1>{{ $pasta['titolo'] }}</h1>

    <ul>
      <li>Tipo: {{ $pasta['tipo'] }}</li>
      <li>Cottura: {{ $pasta['cottura'] }}</li>
      <li>Peso: {{ $pasta['peso'] }}</li>
    </ul>

    <p>
      {!! $pasta['descrizione'] !!}
    </p>
  </div>

@endsection