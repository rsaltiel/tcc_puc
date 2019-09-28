@extends('adminlte::page')

@section('content')
<h1>
    Especialidades
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Especialidades</li>
</ol>
<div class="callout callout-info">
    <p>Gerencie as epecialidades. Adicione, edite e exclua seus dados.</p>
</div>
<div class="box">
    <div class="box-body">        
        <table class="table table-bordered table-hover">
            <thead>
                <th>Cód.</th>
                <th>Nome</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($specialities as $speciality)
                <tr>
                    <td>{{ $speciality->id }}</td>        
                    <td>{{ $speciality->speciality }}</td> 
                    <td><a href="/admin/speciality/{{ $speciality->id}}/edit"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i></a> <a href="/speciality/{{ $speciality->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja excluir {{$speciality->name}}? O registro não será mais exibido, porém, será mantido logicamente no banco de dados. Portanto, esta ação poderá ser desfeita posteriormente.')){document.getElementById('form-delete-{{$speciality->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$speciality->id}}" method="post" style="display: none" action="/admin/speciality/{{ $speciality->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('speciality.create') }}" class="btn btn-block btn-danger">Adicionar nova especialidade</a></div>
</div>

@stop

