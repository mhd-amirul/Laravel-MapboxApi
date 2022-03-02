@extends('layouts.main')

@section('container')
    <h3> {{ $name }} </h3>
    <p> {{ $email }} </p>
    <img src="image/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">    
@endsection