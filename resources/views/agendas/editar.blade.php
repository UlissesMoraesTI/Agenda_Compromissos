@extends('layout')

@section('cabecalho')
Alterar Compromissos
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST">
  @csrf
  {!!Form::model($agendas, ['method'=>'PATCH','route'=>['agendas.editar',$agendas->id])}  
  <div class="form-group">
    
    <label for="nome">Nome</label> 
    <input type="text" class="form-control" name="nome" placeholder="Nome do Compromisso" 
    value="{{ $agenda->nome }}">

    <label for="data">Data</label> 
    <input type="date" class="form-control" name="data" value="{{ $agenda->data }}">

    <label for="horaini">Hora Início</label> 
    <input type="time" class="form-control" name="horaini" value="{{ $agenda->horaini }}">

    <label for="horater">Hora Término</label> 
    <input type="time" class="form-control" name="horater" value="{{ $agenda->horater }}">

    <label for="local">Local</label> 
    <input type="text" class="form-control" name="local" placeholder="Local do Compromisso" 
    value="{{ $agenda->local }}">

    <input type="hidden" class="form-control" name="status" value="Agendado" value="{{ $agenda->status }}">

    <label for="obs">Observação</label> 
    <input type="text" value="obs." class="form-control" name="obs" value="{{ $agenda->obs }}">

  </div>

  <button class="btn btn-primary">Alterar</button>
      
</form>

@endsection
