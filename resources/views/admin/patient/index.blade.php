@extends('adminlte::page')

@section('content')
<h1>
    Pacientes
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Início</a></li>
    <li class="active">Pacientes</li>
</ol>
<div class="callout callout-info">
    <p>Gerencie os pacientes. Adicione, edite e exclua seus dados.</p>
</div>
<div class="box">
    <div class="box-body">        
        <table class="table table-bordered table-hover">
            <thead>
                <th>Cód.</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Nascimento</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Paciente desde</th>               
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>        
                    <td>{{ $patient->name }}</td> 
                    <td>{{ $patient->email }}</td> 
                    <td>{{ $patient->document_number }}</td> 
                    <td>{{ date('d/m/Y', strtotime($patient->birth)) }}</td> 
                    <td>{{ $patient->street }} {{ $patient->number }}, {{ $patient->city }}/{{ strtoupper($patient->state) }}, CEP: {{ $patient->postal_code }}</td> 
                    <td>{{ $patient->phone }}</td> 
                    <td>{{ $patient->mobile }}</td>                     
                    <td>{{ \Carbon\Carbon::parse($patient->created_at)->format('d/m/Y') }}</td>  
                    <td><a href="/admin/patient/{{ $patient->id}}/edit"><i class="fa fa-edit" data-toggle="tooltip" title="Editar"></i></a> <a href="/patient/{{ $patient->id}}/destroy" onclick="event.preventDefault();if(confirm('Deseja excluir {{$patient->name}}? O registro não será mais exibido, porém, será mantido logicamente no banco de dados. Portanto, esta ação poderá ser desfeita posteriormente.')){document.getElementById('form-delete-{{$patient->id}}').submit();}"><i class="fa fa-trash"></i></a> </td> 
                    <form id="form-delete-{{$patient->id}}" method="post" style="display: none" action="/admin/patient/{{ $patient->id}}/destroy">
                          @csrf        
                    </form>
                </tr>
                @endforeach()
            </tbody>
        </table>
        
    </div>
    
</div>
<div class="row">
    <div class="col-md-3"><a href="{{ route('patient.create') }}" class="btn btn-block btn-danger">Adicionar novo paciente</a></div>
</div>

@stop

