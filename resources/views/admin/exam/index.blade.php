@extends('adminlte::page')

@section('content')
<h1>
    Exames
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Exames</li>
</ol>
<div class="callout callout-info">
    <p>Gerencie os exames. Adicione, edite e exclua seus dados.</p>
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
                @foreach($exams as $exam)
                <tr>
                    <td>{{ $exam->id }}</td>        
                    <td>{{ $exam->name }}</td> 
                    <td><a href="/admin/exam/{{ $exam->id}}/edit"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i></a> <a href="/exam/{{ $exam->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja excluir {{$exam->name}}? O registro não será mais exibido, porém, será mantido logicamente no banco de dados. Portanto, esta ação poderá ser desfeita posteriormente.')){document.getElementById('form-delete-{{$exam->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$exam->id}}" method="post" style="display: none" action="/admin/exam/{{ $exam->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('exam.create') }}" class="btn btn-block btn-danger">Adicionar novo exame</a></div>
</div>

@stop

