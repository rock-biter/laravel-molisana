@extends('layouts.app')

@section('metaTitle','Contatti - Gianluca Lomarco')

@section('content')

<div class="container">
  <form action="">
    <input type="email" name="email" placeholder="La tua mail">
    <input type="text" name="name" placeholder="Il tuo nome">
    <textarea name="message" cols="30" rows="10" placeholder="La tua richiesta"></textarea>
    <input type="submit" value="Invia">
  </form>
</div>

@endsection