<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="age">Idade:</label>
    <input type="text" name="age" id="age">
    <br>
    <button>Enviar</button>
</form>

