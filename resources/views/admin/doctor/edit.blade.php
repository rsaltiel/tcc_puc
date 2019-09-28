@extends('adminlte::page')
@section('title', 'Cadastrar Médico')
@section('content')

<h1>
    Editar Médico    
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('doctor.index') }}"><i class="fa fa-group"></i> Médicos</a></li>
    <li class="{{ route('doctor.index') }}"> Editar Médico</li>
</ol>
<div class="callout callout-info">
    <p>Altere os dados necessários do médico.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

    <form class="form-horizontal" action="{{ route('doctor.update', ['doctor' => $doctor->id]) }}" method="POST">
        
        {{method_field('PUT')}}
        @include('admin.doctor._form')
        
        <div class="box-footer">            
            <button type="submit" class="btn btn-info">Editar</button>
        </div>
        <!-- /.box-footer -->
        
    </form>
@stop
