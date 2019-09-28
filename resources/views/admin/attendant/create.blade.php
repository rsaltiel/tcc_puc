@extends('adminlte::page')
@section('title', 'Cadastrar atendente')
@section('content')

<h1>
    Cadastrar novo atendente   
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('attendant.index') }}"><i class="fa fa-group"></i> Atendentes</a></li>
    <li class="{{ route('attendant.index') }}"> Cadastrar novo atendente</li>
</ol>
<div class="callout callout-info">
    <p>Adicione os dados de um novo atendente.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

<form class="form-horizontal" action="{{ route('attendant.store') }}" method="POST">
    @include('admin.attendant._form')    
    <div class="box-footer">            
        <button type="submit" class="btn btn-info">Cadastrar</button>
    </div>
    <!-- /.box-footer -->
    
</form>
@stop