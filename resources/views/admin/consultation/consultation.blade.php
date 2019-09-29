@extends('adminlte::page')
@section('title', 'Verificar agenda')
@section('content')

<h1>
    Verificar agenda de consultas
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li><a href="{{ route('consultation.index') }}"><i class="fa fa-group"></i> Consultas</a></li>
    <li class="{{ route('consultation.index') }}"> Agenda</li>
</ol>
<div class="callout callout-info">
    <p>Confira os dados das consultas agendadas.</p>
</div>

@include('form._form_errors')

<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Aplique abaixo os filtros necessários para gerar o relatório de consultas agendadas:</h3>
    </div>      
    <p></p>
    <form class="form-horizontal" action="/admin/view-consultation" method="post">
        @csrf
        <div class="form-group">
            <label for="doctor_id" class="col-sm-2 control-label">Médico:</label>
            <div class="col-sm-10">
                <select class="form-control" name="doctor_id" id="doctor_id" value="{{$consultation->doctor_id}}" required>
                    <option value="">Todos</option> 
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{old('doctor_id',$doctor->doctor_id) == $doctor->id?'selected="selected"': ''}}>{{ $doctor->name }}</option>        
                    @endforeach                                     
                </select>
            </div>
        </div>  
        <div class="form-group">
            <label for="dates" class="col-sm-2 control-label">Status das consultas:</label>
            <div class="col-sm-10">
                <select class="form-control" name="dates" id="dates" value="{{$consultation->dates}}" required>
                    <option value="">Selecione</option>                    
                    <option value="1">Realizadas</option>        
                    <option value="2">A realizar</option>                                
                </select>
            </div>
        </div>      
        <div class="box-footer">            
            <button type="submit" class="btn btn-info">Consultar</button>
        </div>
        <!-- /.box-footer -->
        
    </form>
@stop