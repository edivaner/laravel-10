<h1>Create Suporte</h1>


<form action="{{route('support.store')}}" method="POST">
    @csrf

    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>
