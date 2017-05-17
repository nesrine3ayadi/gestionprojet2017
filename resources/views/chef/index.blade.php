
@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 sidebar">@include('sidebar') </div>
            <div class="col-sm-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading"> Bienvenu chef </div>
                    <div class="panel-body">






<p>
    <a href="{{ route('projet.create') }}"> Ajouter projet</a>
</p>
   <p>
          <a href="{{ route('projet.index') }}"> Liste des projets</a>
       </p>

  <p>
    <a href="{{ route('service.create') }}"> Ajouter un service</a>
</p>
  <p>
    <a href="{{ route('service.index') }}"> Liste des services</a>
  </p>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection