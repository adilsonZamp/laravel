<div>
    <!-- We must ship. - Taylor Otwell -->
    <h1>Editar Disciplina {{$disciplina->nome}}</h1>
    <form action="{{ route('disciplina.update', $disciplina->id_disciplina) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="Nome da Disciplina" value="{{$disciplina->nome}}">
        <input type="number" name="carga_horaria" placeholder="Carga Horária" value="{{$disciplina->carga_horaria}}">
        <label for="cursos">Selecione um Curso: </label>
        <select name="id_curso" id="cursos">
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}" @if ($curso->id == $disciplina->id_curso) selected @endif>{{ $curso->nome }}</option>
            @endforeach
        </select>
        <input type="submit" value="Salvar">
    </form>
    <a href="{{route('disciplina.index')}}">Voltar</a>
</div>
