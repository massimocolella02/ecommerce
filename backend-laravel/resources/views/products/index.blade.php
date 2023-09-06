@extends('layouts.app')
@section('content')
    <h1>Ciao</h1>
    @foreach ($products as $elem)
        <a href="{{ route('products.edit', $elem->id) }}">{{ $elem->name }}</a>
    @endforeach
@endsection