<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AttendantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendants = User::where('active', 1)->where('role', 'A')->orderBy('name', 'asc')
        ->get();

    return view('admin.attendant.index', compact('attendants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attendant.create', ['attendant' => new User()]); 
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
        $data["password"] =  Hash::make($data["password"]);
        User::create($data);
        return redirect()->route('attendant.index');
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
    public function edit(User $attendant)
    {
        return view('admin.attendant.edit', compact('attendant'));
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
        $attendant = User::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $this->_validate($request);
        $data = $request->all();     
        $data["password"] =  Hash::make($data["password"]);   
        $attendant->fill($data); // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $attendant->save();
        return redirect()->route('attendant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendant = User::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $attendant->active = 0; // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $attendant->save();
        return redirect()->route('attendant.index');
    }

    // Método criado especificamente para validar os campos, já que esta validação é feita no insert e no update. Com isso, não é necessário reescrever o mesmo código.
    protected function _validate(Request $request)
    {
       $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    }
}
