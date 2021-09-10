@extends('layout')

@section('cabecalho')
Agenda de Compromissos   
@endsection

@section('conteudo')

@if (!@empty($mensagem))
  <div class="alert alert-success">
    {{ $mensagem }}
  </div>
@endif

<a href="/agendas/criar" class="btn btn-primary mb-2">Adicionar</a>

<table class="table table-hover">
  <thead class="table-dark">
    <tr>
      <th>Nome</th>
      <th>Data</th>
      <th>Hora Início</th>
      <th>Hora Término</th>
      <th>Local</th>
      <th>Status</th>
      <th>Observação</th>
      <th></th>
      <th></th>      
    </tr>
  </thead>

    @foreach ($agendas as $agenda)    
    <tbody>
      <tr>
        <th>{{ $agenda->nome }}</th>
        <th>{{ $agenda->data }}</th>
        <th>{{ $agenda->horaini }}</th>
        <th>{{ $agenda->horater }}</th>
        <th>{{ $agenda->local }}</th>
        <th>{{ $agenda->status }}</th>
        <th>{{ $agenda->obs }}</th>
        <th>
          <form method="POST" action="/agendas/atualizar/{{ $agenda->id}}" onsubmit="return confirm ('Confirma Alteração?')">
            @csrf
            @method('UPDATE')
            <button class="btn btn-primary btn-sm">Alterar</i></button>      
          </form>        
        </th>
        <th>
          <form method="POST" action="/agendas/remover/{{ $agenda->id}}" onsubmit="return confirm ('Confirma Exclusão?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Excluir</i></button>      
          </form>                      
        </th>      
      </tr>
    </tbody>
    @endforeach

    <tfoot class="table-dark">
      <tr>
        <th>Nome</th>
        <th>Data</th>
        <th>Hora Início</th>
        <th>Hora Término</th>
        <th>Local</th>
        <th>Status</th>
        <th>Observação</th>
        <th></th>
        <th></th>      
      </tr>
    </tfoot>  
</table>

  @if(count($agendas) == 0)
    <div class="alert alert-danger">
      <p>Não há Compromissos Agendados</p>
    <div>      
  @endif    
   
@endsection
