<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Remedy;
use App\RemedyManufacturer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RemedyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remedies = DB::table('remedies')
        ->join('remedy_manufacturers', 'remedy_manufacturers.id', '=', 'remedies.manufacturer_id')
        ->select('remedy_manufacturers.*', 'remedies.*')
        ->where('remedies.active', '=', 1)
        ->get(); 
        
        // $remedies = Remedy::where('active', 1)->orderBy('generic_name', 'asc')
        //     ->get();

        return view('admin.remedy.index', compact('remedies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $remedyManufacturers = RemedyManufacturer::where('active', 1)->orderBy('name', 'asc')
        ->get(['id', 'name']);
        return view('admin.remedy.create', ['remedy' => new Remedy()], compact('remedyManufacturers')); 
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
        $this->_validate($request);
        $data = $request->all();        
        Remedy::create($data);
        return redirect()->route('remedy.index');
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
    public function edit(Remedy $remedy)
    {
        $remedyManufacturers = RemedyManufacturer::where('active', 1)->orderBy('name', 'asc')
        ->get(['id', 'name']);

         // Route Model Binding Implícito - Como o remedy é o mesmo nome do parâmetro da rota (para ver as rotas: php artisan route:list), não é necessário usar o findOrFail (abaixo) do ID. 
        // $teacher = Teacher::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        return view('admin.remedy.edit', compact('remedy'), compact('remedyManufacturers'));
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
        $remedy = Remedy::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $this->_validate($request);
        $data = $request->all();        
        $remedy->fill($data); // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $remedy->save();
        return redirect()->route('remedy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remedy = Remedy::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404

        $remedy->active = 0; // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $remedy->save();
        return redirect()->route('remedy.index');
    }

     // Método criado especificamente para validar os campos, já que esta validação é feita no insert e no update. Com isso, não é necessário reescrever o mesmo código.
     protected function _validate(Request $request)
     {
        $this->validate($request, [
             'generic_name' => 'required|max:100',
             'factory_name' => 'required',
             'manufacturer_id' => 'required'  
         ]);
     }
}
