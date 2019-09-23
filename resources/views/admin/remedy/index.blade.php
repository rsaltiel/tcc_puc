@extends('adminlte::page')

@section('content')
<h1>
    Medicamentos
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Medicamentos</li>
</ol>
<div class="callout callout-info">
    <p>Gerencie os medicamentos. Adicione, edite e exclua seus dados.</p>
</div>
<div class="box">
    <div class="box-body">        
        <table class="table table-bordered table-hover">
            <thead>
                <th>Cód.</th>
                <th>Nome genérico</th>
                <th>Nome fantasia</th>
                <th>Fabricante</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($remedies as $remedy)
                <tr>
                    <td>{{ $remedy->id }}</td>        
                    <td>{{ $remedy->generic_name }}</td> 
                    <td>{{ $remedy->factory_name }}</td> 
                    <td>{{ $remedy->name }}</td>                
                    <td><a href="/admin/remedy/{{ $remedy->id}}/edit"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i></a> <a href="/remedy/{{ $remedy->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja excluir {{$remedy->name}}? O registro não será mais exibido, porém, será mantido logicamente no banco de dados. Portanto, esta ação poderá ser desfeita posteriormente.')){document.getElementById('form-delete-{{$remedy->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$remedy->id}}" method="post" style="display: none" action="/admin/remedy/{{ $remedy->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('remedy.create') }}" class="btn btn-block btn-danger">Adicionar novo remédio</a></div>
</div>

@stop

