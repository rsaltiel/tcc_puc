<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Patient;
use App\Consultation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewConsultation(Request $request){

        $data = $request->all();

        if ($data["dates"] == 1){
            $dateFilter = ">=";
        }  else {
            $dateFilter = "<=";
        }        

        $registrations = DB::table('consultations')
                    ->join('users', 'users.id', '=', 'consultations.doctor_id')
                    ->join('patients', 'patients.id', '=', 'consultations.patient_id')        
                    ->select('users.name as doctor_name', 'patients.name', 'consultations.*')
                    ->where('consultations.doctor_id', '=', $data["doctor_id"])
                    ->where('consultations.date', ''.$dateFilter.'', $data["dates"])
                    ->where('consultations.active', '=', 1)
                    ->orderBy('consultations.date', 'asc')
                    ->get();

        return view('admin.consultation.index-consultation', compact('registrations'));
         
    }


    public function index()
    {        

        $patients = Patient::where('active', 1)->orderBy('name', 'asc')
        ->get(['id', 'name']);

        $doctors = User::where('active', 1)->where('role', 'D')->orderBy('name', 'asc')
        ->get(['id', 'name']);

        return view('admin.consultation.consultation', ['consultation' => new Consultation()], compact('patients', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::where('active', 1)->orderBy('name', 'asc')
        ->get(['id', 'name']);

        $doctors = User::where('active', 1)->where('role', 'D')->orderBy('name', 'asc')
        ->get(['id', 'name']);

        return view('admin.consultation.create', ['consultation' => new Consultation()], compact('patients', 'doctors')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validate($request);
        $data = $request->all();     
        Consultation::create($data);
        return redirect()->route('consultation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "nois";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultation = Consultation::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $consultation->active = 0; // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $consultation->save();
        return redirect()->route('consultation.index');
    }

    // Método criado especificamente para validar os campos, já que esta validação é feita no insert e no update. Com isso, não é necessário reescrever o mesmo código.
    protected function _validate(Request $request)
    {
        $this->validate($request, [
            'doctor_id' => 'required',
            'date' => 'required|date',
            'patient_id' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
    }
}
