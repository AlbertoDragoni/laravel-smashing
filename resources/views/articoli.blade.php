@php
  $arrayArticoli = config('articoli');
@endphp
@extends('layouts.user-layout')

@section('titolo')
  articoli
@endsection

@section('content')
  @foreach ($arrayArticoli as $key => $articolo)
    <div class="articolo">
      <img src="{{$articolo['avatar']}}" alt="avatar">
      <h3>Autore: {{$articolo['nomeAutore']}}</h3>
      <div class="articolo-info">
        <h2>{{$articolo['titolo']}}</h2>
        <p>{{$articolo['descrizione']}}</p>
        <small>{{$articolo['data']}}</small>
      </div>
    </div>

  @endforeach
@endsection
