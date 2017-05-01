
@foreach( $taches as $t)
    {{ $t->nomTache }}  <a href="{{ route('tache.show',['id'=>$t->id])  }}"> Afficher </a> <br>
@endforeach

