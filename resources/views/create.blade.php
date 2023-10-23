{{request()->path()}}

<form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="age">Idade:</label>
    <input type="text" name="age" id="age">
    <br>
    <label for="photo">Foto:</label>
    <input type="file" name="photo" id="photo">
    <br>
    <button>Enviar</button>
</form>

