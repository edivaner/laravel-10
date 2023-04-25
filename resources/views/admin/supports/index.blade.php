<h1>Listagem dos Duportes</h1>

<a href="{{route('support.create')}}">Criar Dúvida</a>

<table border="1">
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrições</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td> {{$support->subject}} </td>
                <td> {{$support->status}} </td>
                <td> {{$support->body}} </td>
                <td>
                    <a href="{{route('support.show', [$support->id])}}">Detalhes</a>
                    <a href="{{route('support.edit', $support->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
