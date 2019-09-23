@csrf

<div class="box-body">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nome do exame:</label>
        <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" value="{{old('name',$exam->name)}}" required>
        </div>
    </div>   
</div>   