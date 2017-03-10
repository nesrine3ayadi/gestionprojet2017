@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des personnel</div>
                    @foreach ($user as $u)
                    <div class="panel-body">


                        {{ $u->name }} | {{ $u->email }} | @if ( $u->role == 0) admin @endif
                                                            @if ( $u->role == 1) Chef @endif
                                                             @if ( $u->role == 2) Personnel @endif|
                        {{ $u->tel }} | {{ $u-> matricule }}



                        <a href="{{ route('user.edit',$u->id) }}">Modifier</a> <a href="">Supprimer</a> <br>
                        <hr>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection