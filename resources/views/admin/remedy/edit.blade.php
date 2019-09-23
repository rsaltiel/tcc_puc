@extends('adminlte::page')
@section('title', 'Cadastrar medicamento')
@section('content')

<h1>
    Editar medicamento    
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('remedy.index') }}"><i class="fa fa-group"></i> medicamentos</a></li>
    <li class="{{ route('remedy.index') }}"> Editar medicamento</li>
</ol>
<div class="callout callout-info">
    <p>Altere os dados necessários do(a) medicamento.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

    <form class="form-horizontal" action="{{ route('remedy.update', ['remedy' => $remedy->id]) }}" method="POST">
        
        {{method_field('PUT')}}
        @include('admin.remedy._form')
        
        <div class="box-footer">            
            <button type="submit" class="btn btn-info">Editar</button>
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