<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Empresa;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class Empresas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sucursal,  $Nombre, $cp, $tel1, $tel2, $Fec_convenio, $tipo_tarifa, $contacto, $colonia, $descuento, $Pacientes_Mes, $Pacientes_Acum, $Importe_Mes, $Importe_Acum, $Saldo, $rfc, $direccion, $Ciudad, $Entidad, $Tipo_Empresa, $Fecha_Corte, $dias_pago, $Acum_estudios, $Cla_Ant, $UsaTarifaDe, $SiUsa, $numero, $pais, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.empresas.view', [
            'empresas' => Empresa::latest()
						->orWhere('sucursal', 'LIKE', $keyWord)

						->orWhere('Nombre', 'LIKE', $keyWord)
						->orWhere('cp', 'LIKE', $keyWord)
						->orWhere('tel1', 'LIKE', $keyWord)
						->orWhere('tel2', 'LIKE', $keyWord)
						->orWhere('Fec_convenio', 'LIKE', $keyWord)
						->orWhere('tipo_tarifa', 'LIKE', $keyWord)
						->orWhere('contacto', 'LIKE', $keyWord)
						->orWhere('colonia', 'LIKE', $keyWord)
						->orWhere('descuento', 'LIKE', $keyWord)
						->orWhere('Pacientes_Mes', 'LIKE', $keyWord)
						->orWhere('Pacientes_Acum', 'LIKE', $keyWord)
						->orWhere('Importe_Mes', 'LIKE', $keyWord)
						->orWhere('Importe_Acum', 'LIKE', $keyWord)
						->orWhere('Saldo', 'LIKE', $keyWord)
						->orWhere('rfc', 'LIKE', $keyWord)
						->orWhere('direccion', 'LIKE', $keyWord)
						->orWhere('Ciudad', 'LIKE', $keyWord)
						->orWhere('Entidad', 'LIKE', $keyWord)
						->orWhere('Tipo_Empresa', 'LIKE', $keyWord)
						->orWhere('Fecha_Corte', 'LIKE', $keyWord)
						->orWhere('dias_pago', 'LIKE', $keyWord)
						->orWhere('Acum_estudios', 'LIKE', $keyWord)
						->orWhere('Cla_Ant', 'LIKE', $keyWord)
						->orWhere('UsaTarifaDe', 'LIKE', $keyWord)
						->orWhere('SiUsa', 'LIKE', $keyWord)
						->orWhere('numero', 'LIKE', $keyWord)
						->orWhere('pais', 'LIKE', $keyWord)
						->orWhere('fecha_act', 'LIKE', $keyWord)
						->orWhere('fecha_sync', 'LIKE', $keyWord)
						->orWhere('flag_sucursales', 'LIKE', $keyWord)
						->orWhere('eliminar', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	public function reportePDF()
    {
        $siemprehoy = Carbon::now()->format('d/m/Y');
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');
        $empresas = Empresa::latest()->paginate(10);
        $pdf = Pdf::loadView('reporteEmpresas', compact('empresas', 'siemprehoy', 'actualhora'))
        ->setPaper('a4', 'portrait');
        return $pdf->stream('REPORTE');
    }
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->sucursal = null;
	
		$this->Nombre = null;
		$this->cp = null;
		$this->tel1 = null;
		$this->tel2 = null;
		$this->Fec_convenio = null;
		$this->tipo_tarifa = null;
		$this->contacto = null;
		$this->colonia = null;
		$this->descuento = null;
		$this->Pacientes_Mes = null;
		$this->Pacientes_Acum = null;
		$this->Importe_Mes = null;
		$this->Importe_Acum = null;
		$this->Saldo = null;
		$this->rfc = null;
		$this->direccion = null;
		$this->Ciudad = null;
		$this->Entidad = null;
		$this->Tipo_Empresa = null;
		$this->Fecha_Corte = null;
		$this->dias_pago = null;
		$this->Acum_estudios = null;
		$this->Cla_Ant = null;
		$this->UsaTarifaDe = null;
		$this->SiUsa = null;
		$this->numero = null;
		$this->pais = null;
		$this->fecha_act = null;
		$this->fecha_sync = null;
		$this->flag_sucursales = null;
		$this->eliminar = null;
    }

    public function store()
    {
        $this->validate([
			'Nombre' => 'required',
		]);

        Empresa::create([ 

			'Nombre' => $this-> Nombre,
			'cp' => $this-> cp,
			'tel1' => $this-> tel1,
			'tel2' => $this-> tel2,
			'Fec_convenio' => $this-> Fec_convenio,
			'tipo_tarifa' => $this-> tipo_tarifa,
			'contacto' => $this-> contacto,
			'colonia' => $this-> colonia,
			'descuento' => $this-> descuento,
			'Pacientes_Mes' => $this-> Pacientes_Mes,
			'Pacientes_Acum' => $this-> Pacientes_Acum,
			'Importe_Mes' => $this-> Importe_Mes,
			'Importe_Acum' => $this-> Importe_Acum,
			'Saldo' => $this-> Saldo,
			'rfc' => $this-> rfc,
			'direccion' => $this-> direccion,
			'Ciudad' => $this-> Ciudad,
			'Entidad' => $this-> Entidad,
			'Tipo_Empresa' => $this-> Tipo_Empresa,
			'Fecha_Corte' => $this-> Fecha_Corte,
			'dias_pago' => $this-> dias_pago,
			'Acum_estudios' => $this-> Acum_estudios,
			'Cla_Ant' => $this-> Cla_Ant,
			'UsaTarifaDe' => $this-> UsaTarifaDe,
			'SiUsa' => $this-> SiUsa,
			'numero' => $this-> numero,
			'pais' => $this-> pais,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		return redirect('/empresas');
		session()->flash('message', 'Empresa Successfully created.');
    }

    public function edit($id)
    {
        $record = Empresa::findOrFail($id);

        $this->selected_id = $id; 
		$this->Nombre = $record-> Nombre;
		$this->cp = $record-> cp;
		$this->tel1 = $record-> tel1;
		$this->tel2 = $record-> tel2;
		$this->Fec_convenio = $record-> Fec_convenio;
		$this->tipo_tarifa = $record-> tipo_tarifa;
		$this->contacto = $record-> contacto;
		$this->colonia = $record-> colonia;
		$this->descuento = $record-> descuento;
		$this->Pacientes_Mes = $record-> Pacientes_Mes;
		$this->Pacientes_Acum = $record-> Pacientes_Acum;
		$this->Importe_Mes = $record-> Importe_Mes;
		$this->Importe_Acum = $record-> Importe_Acum;
		$this->Saldo = $record-> Saldo;
		$this->rfc = $record-> rfc;
		$this->direccion = $record-> direccion;
		$this->Ciudad = $record-> Ciudad;
		$this->Entidad = $record-> Entidad;
		$this->Tipo_Empresa = $record-> Tipo_Empresa;
		$this->Fecha_Corte = $record-> Fecha_Corte;
		$this->dias_pago = $record-> dias_pago;
		$this->Acum_estudios = $record-> Acum_estudios;
		$this->Cla_Ant = $record-> Cla_Ant;
		$this->UsaTarifaDe = $record-> UsaTarifaDe;
		$this->SiUsa = $record-> SiUsa;
		$this->numero = $record-> numero;
		$this->pais = $record-> pais;
		$this->fecha_act = $record-> fecha_act;
		$this->fecha_sync = $record-> fecha_sync;
		$this->flag_sucursales = $record-> flag_sucursales;
		$this->eliminar = $record-> eliminar;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
			'Nombre' => 'required',
		]);

        if ($this->selected_id) {
			$record = Empresa::find($this->selected_id);
            $record->update([ 
			'sucursal' => $this-> sucursal,
			'Nombre' => $this-> Nombre,
			'cp' => $this-> cp,
			'tel1' => $this-> tel1,
			'tel2' => $this-> tel2,
			'Fec_convenio' => $this-> Fec_convenio,
			'tipo_tarifa' => $this-> tipo_tarifa,
			'contacto' => $this-> contacto,
			'colonia' => $this-> colonia,
			'descuento' => $this-> descuento,
			'Pacientes_Mes' => $this-> Pacientes_Mes,
			'Pacientes_Acum' => $this-> Pacientes_Acum,
			'Importe_Mes' => $this-> Importe_Mes,
			'Importe_Acum' => $this-> Importe_Acum,
			'Saldo' => $this-> Saldo,
			'rfc' => $this-> rfc,
			'direccion' => $this-> direccion,
			'Ciudad' => $this-> Ciudad,
			'Entidad' => $this-> Entidad,
			'Tipo_Empresa' => $this-> Tipo_Empresa,
			'Fecha_Corte' => $this-> Fecha_Corte,
			'dias_pago' => $this-> dias_pago,
			'Acum_estudios' => $this-> Acum_estudios,
			'Cla_Ant' => $this-> Cla_Ant,
			'UsaTarifaDe' => $this-> UsaTarifaDe,
			'SiUsa' => $this-> SiUsa,
			'numero' => $this-> numero,
			'pais' => $this-> pais,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Empresa Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Empresa::where('id', $id);
            $record->delete();
        }
    }
}
