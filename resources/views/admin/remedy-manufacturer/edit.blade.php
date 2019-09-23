@extends('adminlte::page')
@section('title', 'Cadastrar fabricante')
@section('content')

<h1>
    Editar fabricante    
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('remedy-manufacturer.index') }}"><i class="fa fa-group"></i> Fabricantes</a></li>
    <li class="{{ route('remedy-manufacturer.index') }}"> Editar fabricante</li>
</ol>
<div class="callout callout-info">
    <p>Altere os dados necessários do(a) fabricante.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

    <form class="form-horizontal" action="{{ route('remedy-manufacturer.update', ['remedyManufacturer' => $remedyManufacturer->id]) }}" method="POST">
        
        {{method_field('PUT')}}
        @include('admin.remedy-manufacturer._form')
        
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