<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <h1>Cursos Cadastrados</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Duração</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($data as $curso) 
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->nome}}</td>
                    <td>{{$curso->duracao}}</td>
                    <td>
                        <a href="{{route('curso.show', $curso->id)}}">Mais Infor.</a>
                        <a href="{{route('curso.edit', $curso->id)}}">Editar</a>
                        <form action="{{route('curso.destroy', $curso->id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Deletar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('curso.create')}}">Novo Curso</a>
    <br>
    <a href="{{ route('home') }}">Voltar para Home</a>
</div>
