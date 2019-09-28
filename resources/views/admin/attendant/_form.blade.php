@csrf

<div class="box-body">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nome do atendente:</label>
        <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" value="{{old('name',$attendant->name)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">E-mail:</label>
        <div class="col-sm-10">
        <input type="text" name="email" id="email" class="form-control" value="{{old('email',$attendant->email)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Senha:</label>
        <div class="col-sm-10">
        <input type="password" name="password" id="password" class="form-control" value="" required>
        </div>
    </div>   
</div>   