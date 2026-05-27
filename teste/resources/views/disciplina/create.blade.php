<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1>Nova Disciplina</h1>
    <form action="{{route('disciplina.store')}}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome da Disciplina">
        <input type="number" name="carga_horaria" placeholder="Carga Horária">
        <label for="cursos">Selecione um Curso</label>
        <select name="id_curso" id="cursos">
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}" >{{ $curso->nome }}</option>
            @endforeach
        </select>
        <input type="submit" value="Salvar">
        <a href="{{route('disciplina.index')}}">Voltar</a>
    </form>
</div>
