<?php

namespace App\Http\Controllers\Admin;

use App\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::where('active', 1)->orderBy('name', 'asc')
            ->get();

        return view('admin.exam.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exam.create', ['exam' => new Exam()]); 
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
        Exam::create($data);
        return redirect()->route('exam.index');
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
    public function edit(Exam $exam)
    {
        return view('admin.exam.edit', compact('exam'));
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
        $exam = Exam::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $this->_validate($request);
        $data = $request->all();        
        $exam->fill($data); // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $exam->save();
        return redirect()->route('exam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Exam::findOrFail($id); // Se não existir o ID, vai falhar, retornando página 404
        $exam->active = 0; // Usa a lógica do fillable, delimitando os campos seguros. Desta forma, preenche apenas os campos pertinentes, atualizando os campos do modelo.
        $exam->save();
        return redirect()->route('exam.index');
    }

     // Método criado especificamente para validar os campos, já que esta validação é feita no insert e no update. Com isso, não é necessário reescrever o mesmo código.
     protected function _validate(Request $request)
     {
        $this->validate($request, [
             'name' => 'required|max:100'               
         ]);
     }
}
