@csrf

<div class="box-body">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nome do médico:</label>
        <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" value="{{old('name',$doctor->name)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">E-mail:</label>
        <div class="col-sm-10">
        <input type="text" name="email" id="email" class="form-control" value="{{old('email',$doctor->email)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Senha:</label>
        <div class="col-sm-10">
        <input type="password" name="password" id="password" class="form-control" value="" required>
        </div>
    </div>  
    <div class="form-group">
        <label for="speciality_id" class="col-sm-2 control-label">Especialidade:</label>
        <div class="col-sm-10">
            <select class="form-control" name="speciality_id" id="speciality_id" value="{{$doctor->speciality_id}}" required>
                <option value="">Selecione</option> 
                @foreach($specialities as $speciality)
                <option value="{{ $speciality->id }}" {{old('speciality_id',$doctor->speciality_id) == $speciality->id?'selected="selected"': ''}}>{{ $speciality->speciality }}</option>        
                @endforeach                                     
            </select>
        </div>
    </div>  
</div>   