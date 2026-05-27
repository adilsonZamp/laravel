<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <h1>Disciplinas Cadastradas</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Carga Horária</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($data as $disciplina) 
                <tr>
                    <td>{{$disciplina->id_disciplina}}</td>
                    <td>{{$disciplina->nome}}</td>
                    <td>{{ $disciplina->curso->nome ?? 'N/A' }}</td>
                    <td>{{$disciplina->carga_horaria}}</td>
                    <td>
                        <a href="{{route('disciplina.show', $disciplina->id_disciplina)}}">Mais Infor.</a>
                        <a href="{{route('disciplina.edit', $disciplina->id_disciplina)}}">Editar</a>
                        <form action="{{route('disciplina.destroy', $disciplina->id_disciplina)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Deletar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('disciplina.create')}}">Nova Disciplina</a>
    <br>
    <a href="{{ route('home') }}">Voltar para Home</a>
</div>
