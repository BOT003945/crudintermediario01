<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Codedge\Fpdf\Fpdf\Fpdf;
use Barryvdh\DomPDF\Facade\Pdf;

class Solicitudes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sucursal, $Paciente, $Paterno, $Materno, $Nombre, $FecNac, $Sexo, $Calle, $Numero, $Rfc, $Estudios, $Ult_solicitud, 
	$Fec_alta, $Importe, $Importe_Acum, $Saldo, $EmpresaAnt, $suc_empresa, $Empresa, $Foraneo, $Descuento, $Titular, $Estado, $Municipio, $Localidad, 
	$Cp, $Colonia, $Credencial, $NumCredencial, $Telefono, $NumEmpleado, $Pais, $cliente, $email, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar, 
	$enviarwhatsapp;
    public $updateMode = false, $pacienteSeleccionado;

	//public $pacientes = Paciente::latest()->paginate(10);
	/* public function mount() {
        $this->pacientes = [];
    }*/
    public function render()
    {
		$empresas = Empresa::all();
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.solicitudes.view', compact('empresas'),[
            'pacientes' => Paciente::latest()->paginate(10)
        ]);
		
    }

	/* public function updatedPaciente($id)
    {
        $record = Paciente::findOrFail($id);
        $this->Paciente = $record-> Paciente;
        $this->selected_id = $id; 
		$this->updateMode = true;
    } */
	public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
    private function resetInput()
    {		
		$this->sucursal = null;
		$this->Paciente = null;
		$this->Paterno = null;
		$this->Materno = null;
		$this->Nombre = null;
		$this->FecNac = null;
		$this->Sexo = null;
		$this->Calle = null;
		$this->Numero = null;
		$this->Rfc = null;
		$this->Estudios = null;
		$this->Ult_solicitud = null;
		$this->Fec_alta = null;
		$this->Importe = null;
		$this->Importe_Acum = null;
		$this->Saldo = null;
		$this->EmpresaAnt = null;
		$this->suc_empresa = null;
		$this->Empresa = null;
		$this->Foraneo = null;
		$this->Descuento = null;
		$this->Titular = null;
		$this->Estado = null;
		$this->Municipio = null;
		$this->Localidad = null;
		$this->Cp = null;
		$this->Colonia = null;
		$this->Credencial = null;
		$this->NumCredencial = null;
		$this->Telefono = null;
		$this->NumEmpleado = null;
		$this->Pais = null;
		$this->cliente = null;
		$this->email = null;
		$this->fecha_act = null;
		$this->fecha_sync = null;
		$this->flag_sucursales = null;
		$this->eliminar = null;
		$this->enviarwhatsapp = null;
    }

	
    public function store()
    {
        $this->validate([
		'Paciente' => 'required|min:2|max:150',
		'FecNac' => 'required',
		'Sexo' => 'required',

        ]);
        Paciente::create([ 
			'Paciente' => $this-> Paciente,
			'FecNac' => $this-> FecNac,
			'Sexo' => $this-> Sexo,
			'Calle' => $this-> Calle,
			'Numero' => $this-> Numero,
			'Rfc' => $this-> Rfc,
			'Estudios' => $this-> Estudios,
			'Ult_solicitud' => $this-> Ult_solicitud,
			'Importe' => $this-> Importe,
			'Importe_Acum' => $this-> Importe_Acum,
			'Saldo' => $this-> Saldo,
			'EmpresaAnt' => $this-> EmpresaAnt,
			'Empresa' => $this-> Empresa,
			'Foraneo' => $this-> Foraneo,
			'Descuento' => $this-> Descuento,
			'Titular' => $this-> Titular,
			'Estado' => $this-> Estado,
			'Municipio' => $this-> Municipio,
			'Localidad' => $this-> Localidad,
			'Cp' => $this-> Cp,
			'Colonia' => $this-> Colonia,
			'Credencial' => $this-> Credencial,
			'NumCredencial' => $this-> NumCredencial,
			'Telefono' => $this-> Telefono,
			'NumEmpleado' => $this-> NumEmpleado,
			'Pais' => $this-> Pais,
			'cliente' => $this-> cliente,
			'email' => $this-> email,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'enviarwhatsapp' => $this-> enviarwhatsapp
        ]);
		//$Pacientes->save();
        $this->resetInput();
		
		$this->emit('closeModal');
		session()->flash('message', 'Paciente Successfully created.');
		return redirect('/solicitudes');
    }

    public function edit($id)
    {
        $record = Paciente::findOrFail($id);

        $this->selected_id = $id; 
		//$this->sucursal = $record-> sucursal;
		$this->Paciente = $record-> Paciente;
	
		$this->FecNac = $record-> FecNac;
		$this->Sexo = $record-> Sexo;
		$this->Calle = $record-> Calle;
		$this->Numero = $record-> Numero;
		$this->Rfc = $record-> Rfc;
		$this->Estudios = $record-> Estudios;
		$this->Ult_solicitud = $record-> Ult_solicitud;
		$this->Fec_alta = $record-> Fec_alta;
		$this->Importe = $record-> Importe;
		$this->Importe_Acum = $record-> Importe_Acum;
		$this->Saldo = $record-> Saldo;
		$this->EmpresaAnt = $record-> EmpresaAnt;
		$this->Empresa = $record-> Empresa;
		$this->Foraneo = $record-> Foraneo;
		$this->Descuento = $record-> Descuento;
		$this->Titular = $record-> Titular;
		$this->Estado = $record-> Estado;
		$this->Municipio = $record-> Municipio;
		$this->Localidad = $record-> Localidad;
		$this->Cp = $record-> Cp;
		$this->Colonia = $record-> Colonia;
		$this->Credencial = $record-> Credencial;
		$this->NumCredencial = $record-> NumCredencial;
		$this->Telefono = $record-> Telefono;
		$this->NumEmpleado = $record-> NumEmpleado;
		$this->Pais = $record-> Pais;
		$this->cliente = $record-> cliente;
		$this->email = $record-> email;
		$this->fecha_act = $record-> fecha_act;
		$this->fecha_sync = $record-> fecha_sync;
		$this->flag_sucursales = $record-> flag_sucursales;
		//$this->eliminar = $record-> eliminar;
		$this->enviarwhatsapp = $record-> enviarwhatsapp;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
			'Paciente' => 'required|min:2|max:150',

			'FecNac' => 'required',
			'Sexo' => 'required',
			]);

        if ($this->selected_id) {
			$record = Paciente::find($this->selected_id);
            $record->update([ 
			//'sucursal' => $this-> sucursal,
			'Paciente' => $this-> Paciente,
			/* 'Paterno' => $this-> Paterno,
			'Materno' => $this-> Materno, */
			//'Nombre' => $this-> Nombre,
			'FecNac' => $this-> FecNac,
			'Sexo' => $this-> Sexo,
			'Calle' => $this-> Calle,
			'Numero' => $this-> Numero,
			'Rfc' => $this-> Rfc,
			'Estudios' => $this-> Estudios,
			'Ult_solicitud' => $this-> Ult_solicitud,
			'Fec_alta' => $this-> Fec_alta,
			'Importe' => $this-> Importe,
			'Importe_Acum' => $this-> Importe_Acum,
			'Saldo' => $this-> Saldo,
			'EmpresaAnt' => $this-> EmpresaAnt,
			'Empresa' => $this-> Empresa,
			'Foraneo' => $this-> Foraneo,
			'Descuento' => $this-> Descuento,
			'Titular' => $this-> Titular,
			'Estado' => $this-> Estado,
			'Municipio' => $this-> Municipio,
			'Localidad' => $this-> Localidad,
			'Cp' => $this-> Cp,
			'Colonia' => $this-> Colonia,
			'Credencial' => $this-> Credencial,
			'NumCredencial' => $this-> NumCredencial,
			'Telefono' => $this-> Telefono,
			'NumEmpleado' => $this-> NumEmpleado,
			'Pais' => $this-> Pais,
			'cliente' => $this-> cliente,
			'email' => $this-> email,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			//'eliminar' => 7877,
			//'enviarwhatsapp' => $this-> enviarwhatsapp
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Paciente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Paciente::where('id', $id);
            $record->delete();
        }
    }
}
