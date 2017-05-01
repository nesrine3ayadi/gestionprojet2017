@foreach($chat as $c)
    {{ \App\User::findOrFail($c->emetteur)->name }} :
    {{ $c->contenu }}
<br>

    @endforeach