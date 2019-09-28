@extends('adminlte::page')
@section('title', 'Cadastrar especialidade')
@section('content')

<h1>
    Cadastrar nova especialidade   
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('speciality.index') }}"><i class="fa fa-group"></i> Especialidades</a></li>
    <li class="{{ route('speciality.index') }}"> Cadastrar nova especialidade</li>
</ol>
<div class="callout callout-info">
    <p>Adicione os dados de uma novo especialidade.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

<form class="form-horizontal" action="{{ route('speciality.store') }}" method="POST">
    @include('admin.speciality._form')    
    <div class="box-footer">            
        <button type="submit" class="btn btn-info">Cadastrar</button>
    </div>
    <!-- /.box-footer -->
    
</form>
@stop