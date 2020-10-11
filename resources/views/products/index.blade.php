@extends('layout')

@section('title')
    Prodotti
@endsection

@section('main')
    <div class="d-flex flex-row justify-content-around align-items-center mb-5">
        <h1 class="display-4 text-center">Catalogo dei prodotti</h1>

        <a href="{{ route('products.create') }}">
            <button class="btn btn-outline-dark">
                <i class="fas fa-plus fa-lg"></i>
            </button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Disponibile</th>
                <th scope="col">Visualizza</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
            </tr>
            </thead>

            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->available }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">
                            <i class="fas fa-eye fa-lg"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">
                            <i class="fas fa-edit fa-lg"></i>
                        </a>
                    </td>
                    <td>
                        <form action="/products/{{ $product->id }}" method="post">
                            @method('delete')

                            <button type="submit" class="btn btn-link"
                                    onclick="return confirm('Vuoi davvero eliminare questo prodotto?');">
                                <i class="fas fa-trash fa-lg"></i>
                            </button>

                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
