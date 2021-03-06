@extends('layout')

@section('title')
    Crea Prodotto
@endsection

@section('main')
    <div class="card my-5">
        <h2 class="card-header">Crea un nuovo prodotto</h2>
        <div class="card-body">
            <form action="/products" method="post">
                @if ($errors->has('name'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('name') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                           class="form-control"
                           placeholder="Inserisci il nome del prodotto...">
                </div>

                @if ($errors->has('description'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('description') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea rows="6" cols="4" id="description" name="description" class="form-control"
                              placeholder="Inserisci la descrizione del prodotto...">{{ old('description') }}</textarea>
                </div>

                @if ($errors->has('available'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('available') }}
                    </div>
                @endif

                <div class="form-group">
                    <select class="custom-select" name="available">
                        <option disabled selected>Disponibile</option>
                        @foreach($product->availableOptions() as $availableOptionKey => $availableOptionValue)
                            <option value="{{ $availableOptionKey }}">
                                {{ $availableOptionValue }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @if ($errors->has('category_id'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('category_id') }}
                    </div>
                @endif

                <div class="form-group">
                    <select class="custom-select" name="category_id">
                        <option disabled selected>Categoria</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="from-group">
                    <button class="btn btn-outline-success">
                        CREA
                    </button>
                </div>

                @csrf
            </form>
        </div>
    </div>
@endsection
