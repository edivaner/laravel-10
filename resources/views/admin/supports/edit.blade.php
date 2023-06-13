<h1>Suporte {{$support->id}}</h1>
<a href="{{route('support.index')}}"> Voltar </a>

<x-alert/>

<form action="{{route('support.update', $support->id)}}" method="POST">
    @method("PUT")
    @include('admin.supports.partials.form', [
        'support' => $support
    ])
</form>
