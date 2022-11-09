<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antibiotico;
use App\Models\GrupoAntibiotico;
use App\Models\DetalleGrupoAntibiotico;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DetalleGrupoAntibioticoController extends Controller
{
    public $updateMode = false, $pacienteSeleccionado;

    
    public function index(Request $request)
    {
        $id_select = $request->get('select');
        /* $buscapor = $request->get('buscar');
        $grupo_antibioticos = DB::table('grupo_antibioticos')->select('*')->where('descripcion', 'LIKE', '%'.$buscapor.'%')->get(); */
        $grupo_antibioticos = DB::table('grupo_antibioticos')->select('*')->get();

        return view('detallegrupoantibioticos.index',compact('grupo_antibioticos','id_select', ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detallegrupoantibioticos.create');
    }

    public function store(Request $request)
    {
        $g_antibioticos = new GrupoAntibiotico();        
 
        $g_antibioticos->descripcion = $request->get('descripcion');        
       
        $g_antibioticos->save();
        return redirect('/detallegrupoantibioticos');
    }

    public function show($id)
    {
        
    }
    //$pacientes = Paciente::latest()
        //->where('Nombre', 'LIKE', '%'.$buscapor.'%')
        //->where('created_at', 'LIKE', '%'.$f1.'%')
        //->where('created_at', 'LIKE', '%'.$fecha_fin.'%')
        //->where('created_at', 'BETWEEN', $f1.'AND'.$fecha_fin)
        //->paginate($this::PAGINACION);
        //->with('pacientes',$pacientes)
    public function edit($id, Request $request)
    {
        //$id =  Crypt::decrypt($id);
        return view('detallegrupoantibioticos.edit')->with([
            'grupo_antibiotico' => GrupoAntibiotico::findorFail($id), //Para datos de la tabla de Grupos de Antibioticos
            'antibioticos' => Antibiotico::all(), //Para el select de antibioticos disponibles
            'detallesGA' => DetalleGrupoAntibiotico::all()->where('id_GrupoAntibiotico', '=', $id)//Para el select de antibioticos asignados
        ]);
    }
    
    /*SELECT *
    FROM antibioticos
    JOIN detalle_grupo_antibioticos ON detalle_grupo_antibioticos.id_Antibiotico = antibioticos.id
    WHERE detalle_grupo_antibioticos.id_Antibiotico = 54 */

    public function update(Request $request, $id)
    {
        $Antibiotico = GrupoAntibiotico::find($id);
        $Antibiotico->descripcion = $request->get('descripcion');
        $Antibiotico->save();


        $dg_antibioticos = new DetalleGrupoAntibiotico();
        $dg_antibioticos->id_Antibiotico = $request->get('select_disponible');
        $dg_antibioticos->id_GrupoAntibiotico = $request->get('grupo_Id');
        $dg_antibioticos->save();
        return redirect('/detallegrupoantibioticos');
    }


    public function destroy($id)
    {
        $detalleAntibiotico = GrupoAntibiotico::find($id);
        $detalleAntibiotico->delete();
        return redirect('/detallegrupoantibioticos')->with('eliminar', 'Echo');
    }

    public function destroy2($id)
    {
        $detalleAntibiotico = DetalleGrupoAntibiotico::find($id);
        $detalleAntibiotico->delete();
        return redirect('/detallegrupoantibioticos');
    }
}
