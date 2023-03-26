@extends('layouts.main')

@section('content')
  <h2>{{ $name }}</h2>
  <h4>{{ $email }}</h4>
  <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle"
    style="width: 10rem">
@endsection
