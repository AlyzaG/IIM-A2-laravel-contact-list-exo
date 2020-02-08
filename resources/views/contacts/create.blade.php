@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form action="{{route('contacts.index')}}" method="post">
                    <!-- TODO mise en place de la form pour créer un contact -->
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" id="email"
                               placeholder="Entrer votre email"
                               value="{{  old('email', "") }}"
                        >
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Votre message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message"
                                  id="message" cols="30"
                                  rows="10">{{old('message')}}</textarea>
                        @error('message')
                        <div class="invalid-feedback">
                            Votre message est vide
                        </div>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
