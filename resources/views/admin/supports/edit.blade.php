<h1>Suporte {{$support->id}}</h1>
<a href="{{route('support.index')}}"> Voltar </a>


<form action="{{route('support.update', $support->id)}}" method="POST">
    @csrf
    @method("PUT")
    <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject}}">
    <textarea name="body" id="body" cols="30" rows="10" placeholder="Descrição">{{$support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>
