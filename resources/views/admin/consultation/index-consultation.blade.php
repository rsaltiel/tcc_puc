@extends('adminlte::page')

@section('content')
<h1>
    Consultas
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Consultas</li>
</ol>
<div class="callout callout-info">
    <p>Verifica abaixo a agenda de consultas do médico selecionado:</p>
</div>
<div class="box">
    <div class="box-body">        
        <table class="table table-bordered table-hover">
            <thead>
                <th>Cód. da consulta</th>
                <th>Data</th>
                <th>Médico</th>
                <th>Paciente</th>
                <th>Início da consulta</th>
                <th>Fim da consulta</th>                
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($registrations as $registration)
                <tr>
                    <td>{{ $registration->id }}</td>     
                    <td>{{ \Carbon\Carbon::parse($registration->date)->format('d/m/Y') }}</td>     
                    <td>{{ $registration->doctor_name }}</td> 
                    <td>{{ $registration->name }}</td> 
                    <td>{{ $registration->start }}</td> 
                    <td>{{ $registration->end }}</td> 
                    <td><a href="/consultation/{{ $registration->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja cancelar a consulta de {{$registration->name}}? ')){document.getElementById('form-delete-{{$registration->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$registration->id}}" method="post" style="display: none" action="/admin/consultation/{{ $registration->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('consultation.create') }}" class="btn btn-block btn-danger">Registrar nova consulta</a></div>
</div>

@stop

