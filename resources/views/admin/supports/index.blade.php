<h5>Listagem dos suportes</h5>
<a href="{{ route('supports.create') }}">Criar Dúvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>status</th>
        <th>Descrição</th>
        <th>
           >
        </th>
    </thead>
    <tbody>
        @foreach($supports->items() as $support)
        <tr>
            <td>{{$support->subject}}</td>
            <td>{{ getStatusSupport($support->status) }}</td>
            <td>{{$support->body}}</td>
            <td>
                <a href="{{ route('supports.show',$support->id) }}">ir</a>
                <a href="{{ route('supports.edit',$support->id) }}">editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<x-pagination
    :paginator="$supports"
    :appends="$filters" />
