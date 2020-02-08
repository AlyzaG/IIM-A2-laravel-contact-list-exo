@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- TODO href de la balise <a> pour pointer vers la route de création de contact -->
                <a class="btn btn-primary float-right" href="{{route('contacts.create')}}">Ajouter un contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du contact</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- TODO : Début de la boucle -->
                    @foreach ($contacts as $contact)
                    <tr>
                            <!-- TODO Afficher l'id du contact -->
                        <td><p>{{ $contact->id }}</p></td>
                            <!-- TODO Afficher le nom du contact -->
                        <td><p>{{ $contact->name }}</p></td>
                            <!-- TODO Afficher le tel du contact -->
                        <td><p>T{{ $contact->tel }}</p></td>
                            <!-- TODO Afficher l'email du contact -->
                        <td><p>{{ $contact->email }}</p></td>
                        <td>
                            <!-- TODO href de la balise <a> pour pointer vers la route de modification du contact -->
                            <a class="btn btn-primary" href="{{route('contacts.update')}}">Modifier</a>


                            <a class="btn btn-danger"
                               onclick="document.getElementById('delete-form-{{$contact->id}}').submit()">Supprimer</a>
                            <form id="delete-form-{{$contact->id}}">
                                <!-- TODO Form pour la suppression d'un contact -->
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer le contact</button>
                            </form>
                        </td>
                    </tr>
                    <!-- TODO : Conditions pas de contact -->
                    @empty
                    <tr>
                        <td>Vous n'avez pas encore de contact</td>
                    </tr>
                    <!-- TODO : FIN Boucle -->
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
