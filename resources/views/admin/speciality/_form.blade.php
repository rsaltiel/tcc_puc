@csrf

<div class="box-body">
    <div class="form-group">
        <label for="speciality" class="col-sm-2 control-label">Nome da especialidade:</label>
        <div class="col-sm-10">
        <input type="text" name="speciality" id="speciality" class="form-control" value="{{old('speciality',$speciality->speciality)}}" required>
        </div>
    </div>   
</div>   