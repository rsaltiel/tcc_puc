@csrf

<div class="box-body">
    <div class="form-group">
        <label for="doctor_id" class="col-sm-2 control-label">Médico:</label>
        <div class="col-sm-10">
            <select class="form-control" name="doctor_id" id="doctor_id" value="{{$consultation->doctor_id}}" required>
                <option value="">Selecione</option> 
                @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}" {{old('doctor_id',$doctor->doctor_id) == $doctor->id?'selected="selected"': ''}}>{{ $doctor->name }}</option>        
                @endforeach                                     
            </select>
        </div>
    </div>  
    <div class="form-group">
        <label for="patient_id" class="col-sm-2 control-label">Paciente:</label>
        <div class="col-sm-10">
            <select class="form-control" name="patient_id" id="patient_id" value="{{$consultation->patient_id}}" required>
                <option value="">Selecione</option> 
                @foreach($patients as $patient)
                <option value="{{ $patient->id }}" {{old('patient_id',$patient->patient_id) == $patient->id?'selected="selected"': ''}}>{{ $patient->name }}</option>        
                @endforeach                                     
            </select>
        </div>
    </div>  
    <div class="form-group">
        <label for="date" class="col-sm-2 control-label">Data:</label>
        <div class="col-sm-10">
        <input type="date" name="date" id="date" class="form-control" value="{{old('date',$doctor->date)}}" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="start" class="col-sm-2 control-label">Horário de entrada:</label>
        <div class="col-sm-10">
            <select class="form-control" name="start" id="start" value="{{$consultation->start}}" required>
                <option value="">Horário de entrada</option> 
                <option value="08:00" {{old('start',$consultation->start) == '08:00'?'selected="selected"': ''}}>08:00</option> 
                <option value="08:30" {{old('start',$consultation->start) == '08:30'?'selected="selected"': ''}}>08:30</option> 
                <option value="09:00" {{old('start',$consultation->start) == '09:00'?'selected="selected"': ''}}>09:00</option> 
                <option value="09:30" {{old('start',$consultation->start) == '09:30'?'selected="selected"': ''}}>09:30</option> 
                <option value="10:00" {{old('start',$consultation->start) == '10:00'?'selected="selected"': ''}}>10:00</option> 
                <option value="10:30" {{old('start',$consultation->start) == '10:30'?'selected="selected"': ''}}>10:30</option> 
                <option value="11:00" {{old('start',$consultation->start) == '11:00'?'selected="selected"': ''}}>11:00</option> 
                <option value="11:30" {{old('start',$consultation->start) == '11:30'?'selected="selected"': ''}}>11:30</option> 
                <option value="12:00" {{old('start',$consultation->start) == '12:00'?'selected="selected"': ''}}>12:00</option> 
                <option value="12:30" {{old('start',$consultation->start) == '12:30'?'selected="selected"': ''}}>12:30</option> 
                <option value="13:00" {{old('start',$consultation->start) == '13:00'?'selected="selected"': ''}}>13:00</option> 
                <option value="13:30" {{old('start',$consultation->start) == '13:30'?'selected="selected"': ''}}>13:30</option> 
                <option value="14:00" {{old('start',$consultation->start) == '14:00'?'selected="selected"': ''}}>14:00</option> 
                <option value="14:30" {{old('start',$consultation->start) == '14:30'?'selected="selected"': ''}}>14:30</option> 
                <option value="15:00" {{old('start',$consultation->start) == '15:00'?'selected="selected"': ''}}>15:00</option> 
                <option value="15:30" {{old('start',$consultation->start) == '15:30'?'selected="selected"': ''}}>15:30</option> 
                <option value="16:00" {{old('start',$consultation->start) == '16:00'?'selected="selected"': ''}}>16:00</option> 
                <option value="16:30" {{old('start',$consultation->start) == '16:30'?'selected="selected"': ''}}>16:30</option> 
                <option value="17:00" {{old('start',$consultation->start) == '17:00'?'selected="selected"': ''}}>17:00</option> 
                <option value="17:30" {{old('start',$consultation->start) == '17:30'?'selected="selected"': ''}}>17:30</option> 
                <option value="18:00" {{old('start',$consultation->start) == '18:00'?'selected="selected"': ''}}>18:00</option> 
                <option value="18:30" {{old('start',$consultation->start) == '18:30'?'selected="selected"': ''}}>18:30</option> 
                <option value="19:00" {{old('start',$consultation->start) == '19:00'?'selected="selected"': ''}}>19:00</option>                 
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="end" class="col-sm-2 control-label">Horário de saída:</label>
        <div class="col-sm-10">
            <select class="form-control" name="end" id="end" value="{{$consultation->end}}" required>
                <option value="">Horário de saída</option> 
                <option value="08:00" {{old('end',$consultation->end) == '08:00'?'selected="selected"': ''}}>08:00</option> 
                <option value="08:30" {{old('end',$consultation->end) == '08:30'?'selected="selected"': ''}}>08:30</option> 
                <option value="09:00" {{old('end',$consultation->end) == '09:00'?'selected="selected"': ''}}>09:00</option> 
                <option value="09:30" {{old('end',$consultation->end) == '09:30'?'selected="selected"': ''}}>09:30</option> 
                <option value="10:00" {{old('end',$consultation->end) == '10:00'?'selected="selected"': ''}}>10:00</option> 
                <option value="10:30" {{old('end',$consultation->end) == '10:30'?'selected="selected"': ''}}>10:30</option> 
                <option value="11:00" {{old('end',$consultation->end) == '11:00'?'selected="selected"': ''}}>11:00</option> 
                <option value="11:30" {{old('end',$consultation->end) == '11:30'?'selected="selected"': ''}}>11:30</option> 
                <option value="12:00" {{old('end',$consultation->end) == '12:00'?'selected="selected"': ''}}>12:00</option> 
                <option value="12:30" {{old('end',$consultation->end) == '12:30'?'selected="selected"': ''}}>12:30</option> 
                <option value="13:00" {{old('end',$consultation->end) == '13:00'?'selected="selected"': ''}}>13:00</option> 
                <option value="13:30" {{old('end',$consultation->end) == '13:30'?'selected="selected"': ''}}>13:30</option> 
                <option value="14:00" {{old('end',$consultation->end) == '14:00'?'selected="selected"': ''}}>14:00</option> 
                <option value="14:30" {{old('end',$consultation->end) == '14:30'?'selected="selected"': ''}}>14:30</option> 
                <option value="15:00" {{old('end',$consultation->end) == '15:00'?'selected="selected"': ''}}>15:00</option> 
                <option value="15:30" {{old('end',$consultation->end) == '15:30'?'selected="selected"': ''}}>15:30</option> 
                <option value="16:00" {{old('end',$consultation->end) == '16:00'?'selected="selected"': ''}}>16:00</option> 
                <option value="16:30" {{old('end',$consultation->end) == '16:30'?'selected="selected"': ''}}>16:30</option> 
                <option value="17:00" {{old('end',$consultation->end) == '17:00'?'selected="selected"': ''}}>17:00</option> 
                <option value="17:30" {{old('end',$consultation->end) == '17:30'?'selected="selected"': ''}}>17:30</option> 
                <option value="18:00" {{old('end',$consultation->end) == '18:00'?'selected="selected"': ''}}>18:00</option> 
                <option value="18:30" {{old('end',$consultation->end) == '18:30'?'selected="selected"': ''}}>18:30</option> 
                <option value="19:00" {{old('end',$consultation->end) == '19:00'?'selected="selected"': ''}}>19:00</option>                 
            </select>
        </div>
    </div>
</div>   