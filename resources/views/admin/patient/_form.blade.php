@csrf

<div class="box-body">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nome do(a) paciente:</label>
        <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" value="{{old('name',$patient->name)}}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">E-mail:</label>
        <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control" value="{{old('email',$patient->email)}}" required>
        </div>
    </div>     
    <div class="form-group">
        <label for="document_number" class="col-sm-2 control-label">CPF:</label>
        <div class="col-sm-10">
            <input type="text" name="document_number" id="document_number" class="form-control" value="{{old('document_number',$patient->document_number)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="birth_date" class="col-sm-2 control-label">Data de nascimento:</label>
        <div class="col-sm-10">
            <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{old('birth_date',$patient->birth_date)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="street" class="col-sm-2 control-label">Endereço - Rua:</label>
        <div class="col-sm-10">
            <input type="text" name="street" id="street" class="form-control" value="{{old('street',$patient->street)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="number" class="col-sm-2 control-label">Endereço - Número:</label>
        <div class="col-sm-10">
            <input type="text" name="number" id="number" class="form-control" value="{{old('number',$patient->number)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="neighborhood" class="col-sm-2 control-label">Endereço - Bairro:</label>
        <div class="col-sm-10">
            <input type="text" name="neighborhood" id="neighborhood" class="form-control" value="{{old('neighborhood',$patient->neighborhood)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">Endereço - Cidade:</label>
        <div class="col-sm-10">
            <input type="text" name="city" id="city" class="form-control" value="{{old('city',$patient->city)}}" required>
        </div>
    </div> 
    @php
    $state = $patient->state;
    @endphp
    <div class="form-group">
        <label for="state" class="col-sm-2 control-label">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="state" id="state" value="{{$patient->state}}" required>
                <option value="">Selecione</option> 
                <option value="ac" {{old('state',$state) == 'ac'?'selected="selected"': ''}}>Acre</option> 
                <option value="al" {{old('state',$state) == 'al'?'selected="selected"': ''}}>Alagoas</option> 
                <option value="am" {{old('state',$state) == 'am'?'selected="selected"': ''}}>Amazonas</option> 
                <option value="ap" {{old('state',$state) == 'ap'?'selected="selected"': ''}}>Amapá</option> 
                <option value="ba" {{old('state',$state) == 'ba'?'selected="selected"': ''}}>Bahia</option> 
                <option value="ce" {{old('state',$state) == 'ce'?'selected="selected"': ''}}>Ceará</option> 
                <option value="df" {{old('state',$state) == 'df'?'selected="selected"': ''}}>Distrito Federal</option> 
                <option value="es" {{old('state',$state) == 'es'?'selected="selected"': ''}}>Espírito Santo</option> 
                <option value="go" {{old('state',$state) == 'go'?'selected="selected"': ''}}>Goiás</option> 
                <option value="ma" {{old('state',$state) == 'ma'?'selected="selected"': ''}}>Maranhão</option> 
                <option value="mt" {{old('state',$state) == 'mt'?'selected="selected"': ''}}>Mato Grosso</option> 
                <option value="ms" {{old('state',$state) == 'ms'?'selected="selected"': ''}}>Mato Grosso do Sul</option> 
                <option value="mg" {{old('state',$state) == 'mg'?'selected="selected"': ''}}>Minas Gerais</option> 
                <option value="pa" {{old('state',$state) == 'pa'?'selected="selected"': ''}}>Pará</option> 
                <option value="pb" {{old('state',$state) == 'pb'?'selected="selected"': ''}}>Paraíba</option> 
                <option value="pr" {{old('state',$state) == 'pr'?'selected="selected"': ''}}>Paraná</option> 
                <option value="pe" {{old('state',$state) == 'pe'?'selected="selected"': ''}}>Pernambuco</option> 
                <option value="pi" {{old('state',$state) == 'pi'?'selected="selected"': ''}}>Piauí</option> 
                <option value="rj" {{old('state',$state) == 'rj'?'selected="selected"': ''}}>Rio de Janeiro</option> 
                <option value="rn" {{old('state',$state) == 'rn'?'selected="selected"': ''}}>Rio Grande do Norte</option> 
                <option value="ro" {{old('state',$state) == 'ro'?'selected="selected"': ''}}>Rondônia</option> 
                <option value="rs" {{old('state',$state) == 'rs'?'selected="selected"': ''}}>Rio Grande do Sul</option> 
                <option value="rr" {{old('state',$state) == 'rr'?'selected="selected"': ''}}>Roraima</option> 
                <option value="sc" {{old('state',$state) == 'sc'?'selected="selected"': ''}}>Santa Catarina</option> 
                <option value="se" {{old('state',$state) == 'se'?'selected="selected"': ''}}>Sergipe</option> 
                <option value="sp" {{old('state',$state) == 'sp'?'selected="selected"': ''}}>São Paulo</option> 
                <option value="to" {{old('state',$state) == 'to'?'selected="selected"': ''}}>Tocantins</option> 
            </select>
        </div>
    </div> 
    <div class="form-group">
        <label for="postal_code" class="col-sm-2 control-label">Endereço - CEP:</label>
        <div class="col-sm-10">
            <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{old('postal_code',$patient->postal_code)}}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Telefone:</label>
        <div class="col-sm-10">
            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone',$patient->phone)}}">
        </div>
    </div> 
    <div class="form-group">
        <label for="mobile" class="col-sm-2 control-label">Celular:</label>
        <div class="col-sm-10">
            <input type="text" name="mobile" id="mobile" class="form-control" value="{{old('mobile',$patient->mobile)}}">
        </div>
    </div>  
</div>   