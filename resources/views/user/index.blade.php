@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des Projets</div>
                    @foreach ($projet as $p)
                    <div class="panel-body">

                        {{ $p->nomProjet }}
                                                <hr>
                 </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection