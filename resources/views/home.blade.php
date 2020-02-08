<!-- TODO Étendre le layout "app" -->
@extends('layouts.app')

<!-- TODO Dans la section "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->

@section('content')

    <div class="container">

        @if (count($users)>0)

            @forelse($users as $user)
                <p>L'utilisateur {{$user->name}}  à {{$user->contacts->count()}} contact</p>
            @empty
                <p>Il n'y a pas encore d'utilisateur</p>
            @endforelse

        @endif
    <!-- OU -->

    </div>
@endsection



