<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Codedge\Fpdf\Fpdf\Fpdf;
use Barryvdh\DomPDF\Facade\Pdf;

class Doctores extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sucursal, $doctor, $Paterno, $Materno, $Nombre, $Direccion, $Especialidad1, $Especialidad2, $Fec_alta, $Pacientes_Mes, $Pacientes_Acum, $Importe_mes, $Importe_Acum, $Centro, $Tels, $Estado, $Municipio, $Localidad, $cp, $Colonia, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar, $CedProf, $FecNac, $Sexo, $email;
    public $updateMode = false;

    public function render()
    {
		
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.doctores.view', [
            'doctores' => Doctor::latest()

						->orWhere('doctor', 'LIKE', $keyWord)
						
						->orWhere('FecNac', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->sucursal = null;
		$this->clave = null;
		$this->doctor = null;
		$this->Paterno = null;
		$this->Materno = null;
		$this->Nombre = null;
		$this->Direccion = null;
		$this->Especialidad1 = null;
		$this->Especialidad2 = null;
		$this->Fec_alta = null;
		$this->Pacientes_Mes = null;
		$this->Pacientes_Acum = null;
		$this->Importe_mes = null;
		$this->Importe_Acum = null;
		$this->Centro = null;
		$this->Tels = null;
		$this->Estado = null;
		$this->Municipio = null;
		$this->Localidad = null;
		$this->cp = null;
		$this->Colonia = null;
		$this->fecha_act = null;
		$this->fecha_sync = null;
		$this->flag_sucursales = null;
		$this->eliminar = null;
		$this->CedProf = null;
		$this->FecNac = null;
		$this->Sexo = null;
		$this->email = null;
    }

	public function reportePDF()
    {
        $siemprehoy = Carbon::now()->toDateString();
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');
        $doctores = Doctor::latest()->paginate(10);
        $pdf = Pdf::loadView('reporteDoctores', compact('doctores', 'siemprehoy', 'actualhora'))->setPaper(array(0,0,1000.00,1000), 'portrait');
        return $pdf->stream('REPORTE');
    }

    public function store()
    {
        $this->validate([
		'doctor' => 'required',
		'FecNac' => 'required',
		'Sexo' => 'required',
		'Especialidad1' => 'required',
        ]);

        Doctor::create([ 
			'doctor' => $this-> doctor,
			
			'Direccion' => $this-> Direccion,
			'Especialidad1' => $this-> Especialidad1,
			
			'Pacientes_Mes' => $this-> Pacientes_Mes,
			'Pacientes_Acum' => $this-> Pacientes_Acum,
			'Importe_mes' => $this-> Importe_mes,
			'Importe_Acum' => $this-> Importe_Acum,
			'Centro' => $this-> Centro,
			'Tels' => $this-> Tels,
			'Estado' => $this-> Estado,
			'Municipio' => $this-> Municipio,
			'Localidad' => $this-> Localidad,
			'cp' => $this-> cp,
			'Colonia' => $this-> Colonia,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'CedProf' => $this-> CedProf,
			'FecNac' => $this-> FecNac,
			'Sexo' => $this-> Sexo,
			'email' => $this-> email
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Doctore Successfully created.');
		return redirect('/doctores');
    }

    public function edit($id)
    {
        $record = Doctor::findOrFail($id);

        $this->selected_id = $id; 
		$this->sucursal = $record-> sucursal;
		$this->doctor = $record-> doctor;
		$this->Paterno = $record-> Paterno;
		$this->Materno = $record-> Materno;
		$this->Nombre = $record-> Nombre;
		$this->Direccion = $record-> Direccion;
		$this->Especialidad1 = $record-> Especialidad1;
		$this->Especialidad2 = $record-> Especialidad2;
		$this->Fec_alta = $record-> Fec_alta;
		$this->Pacientes_Mes = $record-> Pacientes_Mes;
		$this->Pacientes_Acum = $record-> Pacientes_Acum;
		$this->Importe_mes = $record-> Importe_mes;
		$this->Importe_Acum = $record-> Importe_Acum;
		$this->Centro = $record-> Centro;
		$this->Tels = $record-> Tels;
		$this->Estado = $record-> Estado;
		$this->Municipio = $record-> Municipio;
		$this->Localidad = $record-> Localidad;
		$this->cp = $record-> cp;
		$this->Colonia = $record-> Colonia;
		$this->fecha_act = $record-> fecha_act;
		$this->fecha_sync = $record-> fecha_sync;
		$this->flag_sucursales = $record-> flag_sucursales;
		$this->eliminar = $record-> eliminar;
		$this->CedProf = $record-> CedProf;
		$this->FecNac = $record-> FecNac;
		$this->Sexo = $record-> Sexo;
		$this->email = $record-> email;
		
        $this->updateMode = true;
    }

    public function update()
    {
		$this->validate([
			'doctor' => 'required',
		    'FecNac' => 'required',
		    'Sexo' => 'required',
		    'Especialidad1' => 'required',
			]);

        if ($this->selected_id) {
			$record = Doctor::find($this->selected_id);
            $record->update([ 
			'sucursal' => $this-> sucursal,
			'doctor' => $this-> doctor,
			
			'Direccion' => $this-> Direccion,
			'Especialidad1' => $this-> Especialidad1,
			'Especialidad2' => $this-> Especialidad2,
			'Fec_alta' => $this-> Fec_alta,
			'Pacientes_Mes' => $this-> Pacientes_Mes,
			'Pacientes_Acum' => $this-> Pacientes_Acum,
			'Importe_mes' => $this-> Importe_mes,
			'Importe_Acum' => $this-> Importe_Acum,
			'Centro' => $this-> Centro,
			'Tels' => $this-> Tels,
			'Estado' => $this-> Estado,
			'Municipio' => $this-> Municipio,
			'Localidad' => $this-> Localidad,
			'cp' => $this-> cp,
			'Colonia' => $this-> Colonia,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar,
			'CedProf' => $this-> CedProf,
			'FecNac' => $this-> FecNac,
			'Sexo' => $this-> Sexo,
			'email' => $this-> email
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Doctore Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Doctor::where('id', $id);
            $record->delete();
        }
    }
}
