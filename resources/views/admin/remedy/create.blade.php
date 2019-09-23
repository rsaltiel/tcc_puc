@extends('adminlte::page')
@section('title', 'Cadastrar medicamento')
@section('content')

<h1>
    Cadastrar novo medicamento   
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('remedy.index') }}"><i class="fa fa-group"></i> Docentes</a></li>
    <li class="{{ route('remedy.index') }}"> Cadastrar novo docente</li>
</ol>
<div class="callout callout-info">
    <p>Adicione os dados de um novo medicamento.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

<form class="form-horizontal" action="{{ route('remedy.store') }}" method="POST">
    @include('admin.remedy._form')    
    <div class="box-footer">            
        <button type="submit" class="btn btn-info">Cadastrar</button>
    </div>
    <!-- /.box-footer -->
    
</form>
@stop
@section('js')
    <script src="/vendor/masked_input/jquery.maskedinput.js"></script>
    <script>    

    jQuery("#cpf").mask("999.999.999-99");

    jQuery("#address_postalcode").mask("99999-999");
    
    </script>
@stop