<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <h1>Dados da Disciplina</h1>
    <h2>{{$disciplina->nome}}</h2>
    <td>{{ $disciplina->curso->nome }}</td>

    <h3>Carga Horária: {{$disciplina->carga_horaria}} horas totais</h3>
    <a href="{{route('disciplina.index')}}">Voltar</a>
</div>