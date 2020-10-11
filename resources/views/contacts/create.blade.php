@extends('layout')

@section('title')
    Modulo contatti
@endsection

@section('main')
    <div class="card my-5">
        <h2 class="card-header">Contattaci</h2>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <p class="m-0">
                        {{ session()->get('success') }}
                    </p>
                </div>
            @endif

            <form action="/contacts" method="post">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        @if ($errors->has('name'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('name') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                   class="form-control"
                                   placeholder="Inserisci il tuo nome...">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        @if ($errors->has('surname'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('surname') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="surname">Cognome</label>
                            <input type="text" id="surname" name="surname" value="{{ old('surname') }}"
                                   class="form-control"
                                   placeholder="Inserisci il tuo cognome...">
                        </div>
                    </div>
                </div>

                @if ($errors->has('email'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('email') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                           class="form-control"
                           placeholder="Inserisci la tua email...">
                </div>

                @if ($errors->has('subject'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('subject') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="subject">Oggetto</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                           class="form-control"
                           placeholder="Inserisci l'oggetto del contatto...">
                </div>

                @if ($errors->has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first('message') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="message">Messaggio</label>
                    <textarea rows="6" cols="4" id="message" name="message" class="form-control"
                              placeholder="Inserisci il messaggio del contatto...">{{ old('message') }}</textarea>
                </div>

                <div class="from-group">
                    <button class="btn btn-outline-success">
                        INVIA
                    </button>
                </div>

                @csrf
            </form>
        </div>
    </div>
@endsection
