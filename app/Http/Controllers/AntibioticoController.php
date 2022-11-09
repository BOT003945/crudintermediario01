<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antibiotico;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class AntibioticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antibioticos = Antibiotico::all();
        return view('antibioticos.index')->with('antibioticos', $antibioticos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bacterias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Antibioticos = new Antibiotico();
        $Antibioticos->descripcion = $request->get('descripcion');
        $Antibioticos->save();
        return redirect('/antibioticos');
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
    public function edit($id)
    {   $id =  Crypt::decrypt($id);
        return view('antibioticos.edit')->with([
            'antibiotico' => Antibiotico::findorFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $siemprehoy = Carbon::now();

        $Antibiotico = Antibiotico::find($id);

        $Antibiotico->descripcion = $request->get('descripcion');
        $Antibiotico->save();
        return redirect('/antibioticos');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Antibiotico = Antibiotico::find($id);
        $Antibiotico->delete();
        return redirect('/antibioticos')->with('eliminar', 'Echo');
    }
}
