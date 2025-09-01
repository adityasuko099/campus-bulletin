@extends('layouts.app')

@section('content')
  <h2 style="margin-bottom:1rem">Daftar Klub</h2>
  <section class="grid">
    @foreach($clubs as $club)
      <x-club-card :club="$club" />
    @endforeach
  </section>
@endsection