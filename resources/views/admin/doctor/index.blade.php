@extends('adminlte::page')

@section('content')
<h1>
    Médicos
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Médicos</li>
</ol>
<div class="callout callout-info">
    <p>Gerencie os médicos. Adicione, edite e exclua seus dados.</p>
</div>
<div class="box">
    <div class="box-body">        
        <table class="table table-bordered table-hover">
            <thead>
                <th>Cód.</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Especialidade</th>
                <th>Data de cadastro</th>                
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>        
                    <td>{{ $doctor->name }}</td> 
                    <td>{{ $doctor->email }}</td> 
                    <td>{{ $doctor->speciality }}</td> 
                    <td>{{ \Carbon\Carbon::parse($doctor->created_at)->format('d/m/Y') }}</td>  
                    <td><a href="/admin/doctor/{{ $doctor->id}}/edit"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i></a> <a href="/doctor/{{ $doctor->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja excluir {{$doctor->name}}? O registro não será mais exibido, porém, será mantido logicamente no banco de dados. Portanto, esta ação poderá ser desfeita posteriormente.')){document.getElementById('form-delete-{{$doctor->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$doctor->id}}" method="post" style="display: none" action="/admin/doctor/{{ $doctor->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('doctor.create') }}" class="btn btn-block btn-danger">Adicionar novo médico</a></div>
</div>

@stop

