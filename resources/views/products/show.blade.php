@extends('layout')

@section('title')
    Prodotto #{{ $product->id }}
@endsection

@section('main')
    <div class="card my-5">
        <h2 class="card-header text-center">Prodotto #{{ $product->id }}</h2>
        <div class="card-body">
            <p>Nome: {{ $product->name }}</p>

            <p>Descrizione: {{ $product->description }}</p>

            <p>Disponibile: {{ $product->available }}</p>

            <p>Categoria: {{ $product->category->name }}</p>
        </div>
    </div>
@endsection
