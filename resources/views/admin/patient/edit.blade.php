@extends('adminlte::page')
@section('title', 'Cadastrar paciente')
@section('content')

<h1>
    Editar paciente    
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('patient.index') }}"><i class="fa fa-group"></i> Pacientes</a></li>
    <li class="{{ route('patient.index') }}"> Editar paciente</li>
</ol>
<div class="callout callout-info">
    <p>Altere os dados necessários do(a) paciente.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

    <form class="form-horizontal" action="{{ route('patient.update', ['patient' => $patient->id]) }}" method="POST">
        
        {{method_field('PUT')}}
        @include('admin.patient._form')
        
        <div class="box-footer">            
            <button type="submit" class="btn btn-info">Editar</button>
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