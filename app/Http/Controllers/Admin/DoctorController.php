<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = DB::table('users')
        ->join('specialities', 'specialities.id', '=', 'users.speciality_id')
        ->select('specialities.*', 'users.*')
        ->where('users.active', '=', 1)
        ->where('users.role', '=', 'D')
        ->get(); 
        
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialities = Speciality::where('active', 1)->orderBy('speciality', 'asc')
        ->get(['id', 'speciality']);
        return view('admin.doctor.create', ['doctor' => new User()], compact('specialities')); 
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
        // $data["password"] = Hash::make($data["password"]);
        // $data["role"] = 'D';
        // print_r($data);
        // User::create($data);

        User::create([
            'name' => $data["name"],            
            'email' => $data['email'],            
            'password' => Hash::make($data['password']),
            'role' => 'D',
            'speciality_id' => 2,
            'active' => 1
        ]);

        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $doctor)
    {
        $specialities = Speciality::where('active', 1)->orderBy('speciality', 'asc')
        ->get(['id', 'speciality']);

        return view('admin.doctor.edit', compact('doctor'), compact('specialities'));
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
        $doctor = User::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $this->_validate($request);
        $data = $request->all();     
        $data["password"] =  Hash::make($data["password"]);   
        $doctor->fill($data); // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $doctor->save();
        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = User::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $doctor->active = 0; // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $doctor->save();
        return redirect()->route('doctor.index');
    }

    // Método criado especificamente para validar os campos, já que esta validação é feita no insert e no update. Com isso, não é necessário reescrever o mesmo código.
    protected function _validate(Request $request)
    {
       $this->validate($request, [
            'name' => 'required',
            'speciality_id' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    }
}
