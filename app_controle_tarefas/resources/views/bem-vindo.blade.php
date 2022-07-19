@auth
    <h1>TESTE AUTENTICA</h1>
    <p>{{Auth::user()->id}}</p>
    <p>{{Auth::user()->name}}</p>
    <p>{{Auth::user()->email}}</p>
@endauth

@guest
    Convidado
@endguest