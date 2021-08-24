@extends('allday.template')

@section('content')

<h2>{{ $product->name }}</h2>

<p>{{ $product->getPrice() }}</p>

@endsection
