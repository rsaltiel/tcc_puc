@extends('adminlte::page')

@section('content')
<h1>
    Atendentes
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Atendentes</li>
</ol>
<div class="callout callout-info">
    <p>Gerencie os atendentes. Adicione, edite e exclua seus dados.</p>
</div>
<div class="box">
    <div class="box-body">        
        <table class="table table-bordered table-hover">
            <thead>
                <th>Cód.</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data de cadastro</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($attendants as $attendant)
                <tr>
                    <td>{{ $attendant->id }}</td>        
                    <td>{{ $attendant->name }}</td> 
                    <td>{{ $attendant->email }}</td> 
                    <td>{{ \Carbon\Carbon::parse($attendant->created_at)->format('d/m/Y') }}</td>  
                    <td><a href="/admin/attendant/{{ $attendant->id}}/edit"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i></a> <a href="/attendant/{{ $attendant->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja excluir {{$attendant->name}}? O registro não será mais exibido, porém, será mantido logicamente no banco de dados. Portanto, esta ação poderá ser desfeita posteriormente.')){document.getElementById('form-delete-{{$attendant->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$attendant->id}}" method="post" style="display: none" action="/admin/attendant/{{ $attendant->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('attendant.create') }}" class="btn btn-block btn-danger">Adicionar novo atendente</a></div>
</div>

@stop

