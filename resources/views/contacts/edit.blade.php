@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                        <!-- TODO Afficher le nom du contact -->
                <h3>Modification du contact <b>{{ $contacts->name }}</b></h3>
                    <!-- TODO mise en place de la form pour modifier un contact -->
                <form  class="section" action="/modification-contact" method="post">

                    @csrf
                    @method('PATCH')

                    <div class="field">
                        <label class="label">Nouvelles informations</label>
                        <div class="control">
                            <input class="input" type="name" name="name">
                            <input class="input" type="tel" name="tel">
                            <input class="input" type="email" name="email">
                        </div>

                        @if($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @elseif($errors->has('tel'))
                            <p class="help is-danger">{{ $errors->first('tel') }}</p>
                        @elseif($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input class="input" type="text" name="name" value="{{old('name', $contacts->name)}}">
                        </div>
                        @error('name')
                        <div class="invalid-feedback">
                            Le nom est trop long
                        </div>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Téléphone</label>
                        <div class="control">
                            <input class="input" type="text" name="tel" value="{{old('tel', $contacts->tel)}}">
                        </div>
                        @error('tel')
                        <div class="invalid-feedback">
                            Le nom est trop long
                        </div>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="text" name="email" value="{{old('email', $contacts->email)}}">
                        </div>
                        @error('email')
                        <div class="invalid-feedback">
                            Le nom est trop long
                        </div>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link" type="submit">Modifier le contact</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
