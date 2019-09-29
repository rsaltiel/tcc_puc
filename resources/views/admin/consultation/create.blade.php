@extends('adminlte::page')
@section('title', 'Cadastrar consulta')
@section('content')

<h1>
    Agendar nova consulta   
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('consultation.index') }}"><i class="fa fa-group"></i> Consultas</a></li>
    <li class="{{ route('consultation.index') }}"> Agendar nova consulta</li>
</ol>
<div class="callout callout-info">
    <p>Adicione os dados de uma nova consulta.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

<form class="form-horizontal" action="{{ route('consultation.store') }}" method="POST">
    @include('admin.consultation._form')    
    <div class="box-footer">            
        <button type="submit" class="btn btn-info">Cadastrar</button>
    </div>
    <!-- /.box-footer -->
    
</form>
@stop