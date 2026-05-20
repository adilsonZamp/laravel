<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <h1>Dados do Curso</h1>
    <h2>{{$curso->nome}}</h2>
    <h3>Duração: {{$curso->duracao}} anos</h3>
    <a href="{{route('curso.index')}}">Voltar</a>
</div>
