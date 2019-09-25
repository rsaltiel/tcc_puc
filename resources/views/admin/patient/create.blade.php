@extends('adminlte::page')
@section('title', 'Cadastrar paciente')
@section('content')

<h1>
    Cadastrar novo paciente    
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('patient.index') }}"><i class="fa fa-group"></i> Pacientes</a></li>
    <li class="{{ route('patient.index') }}"> Cadastrar novo paciente</li>
</ol>
<div class="callout callout-info">
    <p>Adicione os dados de um novo paciente.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

<form class="form-horizontal" action="{{ route('patient.store') }}" method="POST">
    @include('admin.patient._form')    
    <div class="box-footer">            
        <button type="submit" class="btn btn-info">Cadastrar</button>
    </div>
    <!-- /.box-footer -->
    
</form>
@stop
@section('js')
    <script src="/vendor/masked_input/jquery.maskedinput.js"></script>
    <script>    

    jQuery("#document_number").mask("999.999.999-99");
    jQuery("#postal_code").mask("99999-999");
    jQuery("#phone").mask("(99) 9999-9999");
    jQuery("#mobile").mask("(99) 99999-9999");
    
    </script>
@stop