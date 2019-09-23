@csrf

<div class="box-body">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nome do fabricante:</label>
        <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" value="{{old('name',$remedyManufacturer->name)}}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">E-mail:</label>
        <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control" value="{{old('email',$remedyManufacturer->email)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Telefone:</label>
        <div class="col-sm-10">
            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone',$remedyManufacturer->phone)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="address_city" class="col-sm-2 control-label">Cidade:</label>
        <div class="col-sm-10">
            <input type="text" name="address_city" id="address_city" class="form-control" value="{{old('address_city',$remedyManufacturer->address_city)}}" required>
        </div>
    </div>        
    @php
    $state = $remedyManufacturer->address_state;
    @endphp
    <div class="form-group">
        <label for="address_state" class="col-sm-2 control-label">Estado</label>
        <div class="col-sm-10">
            <select class="form-control" name="address_state" id="address_state" value="{{$remedyManufacturer->address_state}}" required>
                <option value="">Selecione</option> 
                <option value="ac" {{old('address_state',$state) == 'ac'?'selected="selected"': ''}}>Acre</option> 
                <option value="al" {{old('address_state',$state) == 'al'?'selected="selected"': ''}}>Alagoas</option> 
                <option value="am" {{old('address_state',$state) == 'am'?'selected="selected"': ''}}>Amazonas</option> 
                <option value="ap" {{old('address_state',$state) == 'ap'?'selected="selected"': ''}}>Amapá</option> 
                <option value="ba" {{old('address_state',$state) == 'ba'?'selected="selected"': ''}}>Bahia</option> 
                <option value="ce" {{old('address_state',$state) == 'ce'?'selected="selected"': ''}}>Ceará</option> 
                <option value="df" {{old('address_state',$state) == 'df'?'selected="selected"': ''}}>Distrito Federal</option> 
                <option value="es" {{old('address_state',$state) == 'es'?'selected="selected"': ''}}>Espírito Santo</option> 
                <option value="go" {{old('address_state',$state) == 'go'?'selected="selected"': ''}}>Goiás</option> 
                <option value="ma" {{old('address_state',$state) == 'ma'?'selected="selected"': ''}}>Maranhão</option> 
                <option value="mt" {{old('address_state',$state) == 'mt'?'selected="selected"': ''}}>Mato Grosso</option> 
                <option value="ms" {{old('address_state',$state) == 'ms'?'selected="selected"': ''}}>Mato Grosso do Sul</option> 
                <option value="mg" {{old('address_state',$state) == 'mg'?'selected="selected"': ''}}>Minas Gerais</option> 
                <option value="pa" {{old('address_state',$state) == 'pa'?'selected="selected"': ''}}>Pará</option> 
                <option value="pb" {{old('address_state',$state) == 'pb'?'selected="selected"': ''}}>Paraíba</option> 
                <option value="pr" {{old('address_state',$state) == 'pr'?'selected="selected"': ''}}>Paraná</option> 
                <option value="pe" {{old('address_state',$state) == 'pe'?'selected="selected"': ''}}>Pernambuco</option> 
                <option value="pi" {{old('address_state',$state) == 'pi'?'selected="selected"': ''}}>Piauí</option> 
                <option value="rj" {{old('address_state',$state) == 'rj'?'selected="selected"': ''}}>Rio de Janeiro</option> 
                <option value="rn" {{old('address_state',$state) == 'rn'?'selected="selected"': ''}}>Rio Grande do Norte</option> 
                <option value="ro" {{old('address_state',$state) == 'ro'?'selected="selected"': ''}}>Rondônia</option> 
                <option value="rs" {{old('address_state',$state) == 'rs'?'selected="selected"': ''}}>Rio Grande do Sul</option> 
                <option value="rr" {{old('address_state',$state) == 'rr'?'selected="selected"': ''}}>Roraima</option> 
                <option value="sc" {{old('address_state',$state) == 'sc'?'selected="selected"': ''}}>Santa Catarina</option> 
                <option value="se" {{old('address_state',$state) == 'se'?'selected="selected"': ''}}>Sergipe</option> 
                <option value="sp" {{old('address_state',$state) == 'sp'?'selected="selected"': ''}}>São Paulo</option> 
                <option value="to" {{old('address_state',$state) == 'to'?'selected="selected"': ''}}>Tocantins</option> 
            </select>
        </div>
    </div> 
</div>   