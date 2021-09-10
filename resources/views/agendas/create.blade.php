@extends('layout')

@section('cabecalho')
Cadastrar Compromissos
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
  <div class="form-group">
    
    <label for="nome">Nome</label> 
    <input type="text" class="form-control" name="nome" placeholder="Nome do Compromisso">

    <label for="data">Data</label> 
    <input type="date" class="form-control" name="data">

    <label for="horaini">Hora Início</label> 
    <input type="time" class="form-control" name="horaini">

    <label for="horater">Hora Término</label> 
    <input type="time" class="form-control" name="horater">

    <label for="local">Local</label> 
    <input type="text" class="form-control" name="local" placeholder="Local do Compromisso">

    <input type="hidden" class="form-control" name="status" value="Agendado">

    <label for="obs">Observação</label> 
    <input type="text" value="obs." class="form-control" name="obs">

  </div>

  <button class="btn btn-primary">Adicionar</button>
      
</form>

@endsection
