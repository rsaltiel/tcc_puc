@extends('adminlte::page')
@section('title', 'Cadastrar médico')
@section('content')

<h1>
    Cadastrar novo médico   
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('doctor.index') }}"><i class="fa fa-group"></i> Médicos</a></li>
    <li class="{{ route('doctor.index') }}"> Cadastrar novo médico</li>
</ol>
<div class="callout callout-info">
    <p>Adicione os dados de um novo médico.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

<form class="form-horizontal" action="{{ route('doctor.store') }}" method="POST">
    @include('admin.doctor._form')    
    <div class="box-footer">            
        <button type="submit" class="btn btn-info">Cadastrar</button>
    </div>
    <!-- /.box-footer -->
    
</form>
@stop