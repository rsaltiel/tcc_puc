<?php

namespace App\Http\Controllers\Admin;

use App\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities = Speciality::where('active', 1)->orderBy('speciality', 'asc')
        ->get();

        return view('admin.speciality.index', compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.speciality.create', ['speciality' => new Speciality()]); 
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
        Speciality::create($data);
        return redirect()->route('speciality.index');
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
    public function edit(Speciality $speciality)
    {
        return view('admin.speciality.edit', compact('speciality'));
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
        $speciality = Speciality::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $this->_validate($request);
        $data = $request->all();        
        $speciality->fill($data); // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $speciality->save();
        return redirect()->route('speciality.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speciality = Speciality::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $speciality->active = 0; // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $speciality->save();
        return redirect()->route('speciality.index');
    }

    // Método criado especificamente para validar os campos, já que esta validação é feita no insert e no update. Com isso, não é necessário reescrever o mesmo código.
    protected function _validate(Request $request)
    {
       $this->validate($request, [
            'speciality' => 'required|max:100'               
        ]);
    }
}
