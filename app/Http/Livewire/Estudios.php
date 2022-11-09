<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudio;
use App\Models\Depto;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class Estudios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Nombre, $depto, $Abreviatura, $Tomas, $Frecuencia, $Tipoformato, $Notas, $TiempoProceso, $TipoMuestra, $Instrucciones, $DatosTecnicos, $Encabezado, $Tubo, $Noaplicadescuento, $esperfil, $sucursal, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar, $SucProceso;
    public $updateMode = false;

    public function render()
    {
		$deptos = Depto::all();
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.estudios.view',compact('deptos'),[
            'estudios' => Estudio::latest()
						->orWhere('Nombre', 'LIKE', $keyWord)
					
						->orWhere('depto', 'LIKE', $keyWord)
						->orWhere('Abreviatura', 'LIKE', $keyWord)
						->orWhere('Tomas', 'LIKE', $keyWord)
						->orWhere('Frecuencia', 'LIKE', $keyWord)
						->orWhere('Tipoformato', 'LIKE', $keyWord)
						->orWhere('Notas', 'LIKE', $keyWord)
						->orWhere('TiempoProceso', 'LIKE', $keyWord)
						->orWhere('TipoMuestra', 'LIKE', $keyWord)
						->orWhere('Instrucciones', 'LIKE', $keyWord)
						->orWhere('DatosTecnicos', 'LIKE', $keyWord)
						->orWhere('Encabezado', 'LIKE', $keyWord)
						->orWhere('Tubo', 'LIKE', $keyWord)
						->orWhere('Noaplicadescuento', 'LIKE', $keyWord)
						->orWhere('esperfil', 'LIKE', $keyWord)
						->orWhere('sucursal', 'LIKE', $keyWord)
						->orWhere('fecha_act', 'LIKE', $keyWord)
						->orWhere('fecha_sync', 'LIKE', $keyWord)
						->orWhere('flag_sucursales', 'LIKE', $keyWord)
						->orWhere('eliminar', 'LIKE', $keyWord)
						->orWhere('SucProceso', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	public function reportePDF()
    {
        $siemprehoy = Carbon::now()->toDateString();
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');
        $estudios = Estudio::latest()->paginate(7);
        $pdf = Pdf::loadView('reportEstudios', compact('estudios','actualhora','siemprehoy'))
		->setPaper(array(0,0,700.00,1200), 'portrait');
        return $pdf->stream('REPORTE');
    }
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->Nombre = null;

		$this->depto = null;
		$this->Abreviatura = null;
		$this->Tomas = null;
		$this->Frecuencia = null;
		$this->Tipoformato = null;
		$this->Notas = null;
		$this->TiempoProceso = null;
		$this->TipoMuestra = null;
		$this->Instrucciones = null;
		$this->DatosTecnicos = null;
		$this->Encabezado = null;
		$this->Tubo = null;
		$this->Noaplicadescuento = null;
		$this->esperfil = null;
		$this->sucursal = null;
		$this->fecha_act = null;
		$this->fecha_sync = null;
		$this->flag_sucursales = null;
		$this->eliminar = null;
		$this->SucProceso = null;
    }

    public function store()
    {
        $this->validate([
		'Nombre' => 'required',
		'Abreviatura' => 'required',
		'Tomas' => 'required',
		
        ]);

        Estudio::create([ 
			'Nombre' => $this-> Nombre,

			'depto' => $this-> depto,
			'Abreviatura' => $this-> Abreviatura,
			'Tomas' => $this-> Tomas,
			'Frecuencia' => $this-> Frecuencia,
			'Tipoformato' => $this-> Tipoformato,
			'Notas' => $this-> Notas,
			'TiempoProceso' => $this-> TiempoProceso,
			'TipoMuestra' => $this-> TipoMuestra,
			'Instrucciones' => $this-> Instrucciones,
			'DatosTecnicos' => $this-> DatosTecnicos,
			'Encabezado' => $this-> Encabezado,
			'Tubo' => $this-> Tubo,
			'Noaplicadescuento' => $this-> Noaplicadescuento,
			'esperfil' => $this-> esperfil,
			'sucursal' => $this-> sucursal,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar,
			'SucProceso' => $this-> SucProceso
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');		
		session()->flash('message', 'Estudio Successfully created.');
		return redirect('/estudios');
    }

    public function edit($id)
    {
        $record = Estudio::findOrFail($id);

        $this->selected_id = $id; 
		$this->Nombre = $record-> Nombre;
		$this->depto = $record-> depto;
		$this->Abreviatura = $record-> Abreviatura;
		$this->Tomas = $record-> Tomas;
		$this->Frecuencia = $record-> Frecuencia;
		$this->Tipoformato = $record-> Tipoformato;
		$this->Notas = $record-> Notas;
		$this->TiempoProceso = $record-> TiempoProceso;
		$this->TipoMuestra = $record-> TipoMuestra;
		$this->Instrucciones = $record-> Instrucciones;
		$this->DatosTecnicos = $record-> DatosTecnicos;
		$this->Encabezado = $record-> Encabezado;
		$this->Tubo = $record-> Tubo;
		$this->Noaplicadescuento = $record-> Noaplicadescuento;
		$this->esperfil = $record-> esperfil;
		$this->sucursal = $record-> sucursal;
		$this->fecha_act = $record-> fecha_act;
		$this->fecha_sync = $record-> fecha_sync;
		$this->flag_sucursales = $record-> flag_sucursales;
		$this->eliminar = $record-> eliminar;
		$this->SucProceso = $record-> SucProceso;
		
        $this->updateMode = true;
    }

    public function update()
    {
		$this->validate([
			'Nombre' => 'required',
			'Abreviatura' => 'required',
			'Tomas' => 'required',
			
		]);

        if ($this->selected_id) {
			$record = Estudio::find($this->selected_id);
            $record->update([ 
			'Nombre' => $this-> Nombre,
			'depto' => $this-> depto,
			'Abreviatura' => $this-> Abreviatura,
			'Tomas' => $this-> Tomas,
			'Frecuencia' => $this-> Frecuencia,
			'Tipoformato' => $this-> Tipoformato,
			'Notas' => $this-> Notas,
			'TiempoProceso' => $this-> TiempoProceso,
			'TipoMuestra' => $this-> TipoMuestra,
			'Instrucciones' => $this-> Instrucciones,
			'DatosTecnicos' => $this-> DatosTecnicos,
			'Encabezado' => $this-> Encabezado,
			'Tubo' => $this-> Tubo,
			'Noaplicadescuento' => $this-> Noaplicadescuento,
			'esperfil' => $this-> esperfil,
			'sucursal' => $this-> sucursal,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar,
			'SucProceso' => $this-> SucProceso
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Estudio Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Estudio::where('id', $id);
            $record->delete();
        }
    }
}
