@csrf

<div class="box-body">
    <div class="form-group">
        <label for="generic_name" class="col-sm-2 control-label">Nome genérico:</label>
        <div class="col-sm-10">
        <input type="text" name="generic_name" id="generic_name" class="form-control" value="{{old('name',$remedy->generic_name)}}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="factory_name" class="col-sm-2 control-label">Nome fantasia:</label>
        <div class="col-sm-10">
            <input type="text" name="factory_name" id="factory_name" class="form-control" value="{{old('factory_name',$remedy->factory_name)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="manufacturer_id" class="col-sm-2 control-label">Fabricante:</label>
        <div class="col-sm-10">
            <select class="form-control" name="manufacturer_id" id="manufacturer_id" value="{{$remedy->manufacturer_id}}" required>
                <option value="">Selecione</option> 
                @foreach($remedyManufacturers as $remedyManufacturer)
                <option value="{{ $remedyManufacturer->id }}" {{old('manufacturer_id',$remedy->manufacturer_id) == $remedyManufacturer->id?'selected="selected"': ''}}>{{ $remedyManufacturer->name }}</option>        
                @endforeach                                     
            </select>
        </div>
    </div>  
</div>   