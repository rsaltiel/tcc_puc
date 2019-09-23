<?php

namespace App\Http\Controllers\Admin;

use App\RemedyManufacturer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RemedyManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remedyManufacturers = RemedyManufacturer::where('active', 1)->orderBy('name', 'asc')
            ->get();

        return view('admin.remedy-manufacturer.index', compact('remedyManufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.remedy-manufacturer.create', ['remedyManufacturer' => new RemedyManufacturer()]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $this->_validate($request);
        $data = $request->all();        
        RemedyManufacturer::create($data);
        return redirect()->route('remedy-manufacturer.index');
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
    public function edit(RemedyManufacturer $remedyManufacturer)
    {
         // Route Model Binding Implícito - Como o remedy é o mesmo nome do parâmetro da rota (para ver as rotas: php artisan route:list), não é necessário usar o findOrFail (abaixo) do ID. 
        // $teacher = Teacher::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        return view('admin.remedy-manufacturer.edit', compact('remedyManufacturer'));
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
        $remedyManufacturer = RemedyManufacturer::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $this->_validate($request);
        $data = $request->all();        
        $remedyManufacturer->fill($data); // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $remedyManufacturer->save();
        return redirect()->route('remedy-manufacturer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remedyManufacturer = RemedyManufacturer::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404

        $remedyManufacturer->active = 0; // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $remedyManufacturer->save();
        return redirect()->route('remedy-manufacturer.index');
    }

     // Método criado especificamente para validar os campos, já que esta validação é feita no insert e no update. Com isso, não é necessário reescrever o mesmo código.
     protected function _validate(Request $request)
     {
        $this->validate($request, [
             'name' => 'required|max:100',
             'address_city' => 'required',
             'address_state' => 'required|max:2',
             'phone' => 'required',
             'email' => 'required'            
         ]);
     }
}
