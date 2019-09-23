@extends('adminlte::page')

@section('content')
<h1>
    Fabricantes de medicamentos
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Fabricantes de medicamentos</li>
</ol>
<div class="callout callout-info">
    <p>Gerencie os fabricantes de medicamentos. Adicione, edite e exclua seus dados.</p>
</div>
<div class="box">
    <div class="box-body">        
        <table class="table table-bordered table-hover">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Telefone</th>
                <th>E-mail</th>   
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($remedyManufacturers as $remedyManufacturer)
                <tr>
                    <td>{{ $remedyManufacturer->id }}</td>        
                    <td>{{ $remedyManufacturer->name }}</td> 
                    <td>{{ $remedyManufacturer->address_city }}</td> 
                    <td>{{ strtoupper($remedyManufacturer->address_state) }}</td> 
                    <td>{{ $remedyManufacturer->phone }}</td> 
                    <td>{{ $remedyManufacturer->email }}</td>                     
                    <td><a href="/admin/remedy-manufacturer/{{ $remedyManufacturer->id}}/edit"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i></a> <a href="/remedy-manufacturer/{{ $remedyManufacturer->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja excluir {{$remedyManufacturer->name}}? O registro não será mais exibido, porém, será mantido logicamente no banco de dados. Portanto, esta ação poderá ser desfeita posteriormente.')){document.getElementById('form-delete-{{$remedyManufacturer->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$remedyManufacturer->id}}" method="post" style="display: none" action="/admin/remedy-manufacturer/{{ $remedyManufacturer->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('remedy-manufacturer.create') }}" class="btn btn-block btn-danger">Adicionar novo fabricante</a></div>
</div>

@stop

