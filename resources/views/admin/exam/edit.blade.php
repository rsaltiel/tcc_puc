@extends('adminlte::page')
@section('title', 'Cadastrar Exame')
@section('content')

<h1>
    Editar Exame    
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('exam.index') }}"><i class="fa fa-group"></i> Exames</a></li>
    <li class="{{ route('exam.index') }}"> Editar Exame</li>
</ol>
<div class="callout callout-info">
    <p>Altere os dados necessários do exame.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Preencha os dados a seguir. Todos os campos são obrigatórios:</h3>
    </div>      

    <form class="form-horizontal" action="{{ route('exam.update', ['exam' => $exam->id]) }}" method="POST">
        
        {{method_field('PUT')}}
        @include('admin.exam._form')
        
        <div class="box-footer">            
            <button type="submit" class="btn btn-info">Editar</button>
        </div>
        <!-- /.box-footer -->
        
    </form>
@stop
