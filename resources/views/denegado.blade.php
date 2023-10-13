<div>
    <h1>No tienes acceso a los datos</h1>
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Salir</button>
</form>
</div>
