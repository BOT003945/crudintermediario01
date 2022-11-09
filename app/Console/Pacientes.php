<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Paciente;
use App\Models\Empresa;

class Pacientes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sucursal, $Clave, $Paciente, $Paterno, $Materno, $Nombre, $FecNac, $Sexo, $Calle, $Numero, $Rfc, $Estudios, $Ult_solicitud, $Fec_alta, $Importe, $Importe_Acum, $Saldo, $EmpresaAnt, $suc_empresa, $Empresa, $Foraneo, $Descuento, $Titular, $Estado, $Municipio, $Localidad, $Cp, $Colonia, $Credencial, $NumCredencial, $Telefono, $NumEmpleado, $Pais, $cliente, $email, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar, $enviarwhatsapp;
    public $updateMode = false;
	public $dateFrom, $dateTo;

    public function render()
    {
		$fechas = Paciente::whereDate('Fec_alta', '>=', now()->subDays(30))->get();
		$pacientes = Paciente::all();
		$empresas = Empresa::all();
		$dateFrom = '%'.$this->dateFrom .'%';
		$keyWord = '%'.$this->keyWord .'%';
	return view('livewire.pacientes.view', compact('empresas'/*,'fechas'*/),[
            'pacientes' => Paciente::latest()
						->orWhere('sucursal', 'LIKE', $keyWord)
						->orWhere('Clave', 'LIKE', $keyWord)
						->orWhere('Paciente', 'LIKE', $keyWord)
						->orWhere('Paterno', 'LIKE', $keyWord)
						->orWhere('Materno', 'LIKE', $keyWord)
						->orWhere('Nombre', 'LIKE', $keyWord)
						->orWhere('FecNac', 'LIKE', $keyWord)
						->orWhere('Sexo', 'LIKE', $keyWord)
						->orWhere('Calle', 'LIKE', $keyWord)
						->orWhere('Numero', 'LIKE', $keyWord)
						->orWhere('Rfc', 'LIKE', $keyWord)
						->orWhere('Estudios', 'LIKE', $keyWord)
						->orWhere('Ult_solicitud', 'LIKE', $keyWord)
						->orWhere('Fec_alta', 'LIKE', $keyWord)
						->orWhere('Importe', 'LIKE', $keyWord)
						->orWhere('Importe_Acum', 'LIKE', $keyWord)
						->orWhere('Saldo', 'LIKE', $keyWord)
						->orWhere('EmpresaAnt', 'LIKE', $keyWord)
						->orWhere('suc_empresa', 'LIKE', $keyWord)
						->orWhere('Empresa', 'LIKE', $keyWord)
						->orWhere('Foraneo', 'LIKE', $keyWord)
						->orWhere('Descuento', 'LIKE', $keyWord)
						->orWhere('Titular', 'LIKE', $keyWord)
						->orWhere('Estado', 'LIKE', $keyWord)
						->orWhere('Municipio', 'LIKE', $keyWord)
						->orWhere('Localidad', 'LIKE', $keyWord)
						->orWhere('Cp', 'LIKE', $keyWord)
						->orWhere('Colonia', 'LIKE', $keyWord)
						->orWhere('Credencial', 'LIKE', $keyWord)
						->orWhere('NumCredencial', 'LIKE', $keyWord)
						->orWhere('Telefono', 'LIKE', $keyWord)
						->orWhere('NumEmpleado', 'LIKE', $keyWord)
						->orWhere('Pais', 'LIKE', $keyWord)
						->orWhere('cliente', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('fecha_act', 'LIKE', $keyWord)
						->orWhere('fecha_sync', 'LIKE', $keyWord)
						->orWhere('flag_sucursales', 'LIKE', $keyWord)
						->orWhere('eliminar', 'LIKE', $keyWord)
						->orWhere('enviarwhatsapp', 'LIKE', $keyWord)
						->orWhere('created_at', 'LIKE', $keyWord)
						->orWhere('updated_at', 'LIKE', $keyWord)
						->paginate(10),
	]); /*,['pacientes' => Paciente::latest()->orWhere('created_at', 'LIKE', $dateFrom)]*/
    }
	public function filtrar(){

	}
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->sucursal = null;
		$this->Clave = null;
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

	
    public function store(Request $request)
    {
        // $this->validate([
		// 'sucursal' => 'required',
		// 'Clave' => 'required',
		// 'suc_empresa' => 'required',
		// 'Empresa' => 'required',
		// 'eliminar' => 'required',
		// 'enviarwhatsapp' => 'required',
        // ]);
		// $Pacientes = new Paciente();
		// $Pacientes->sucursal = $request->get('sucursal');
		// $Pacientes->Clave = $request->get('Clave');
		// $Pacientes->Empresa = $request->get('Empresa');
		// $Pacientes->suc_empresa = $request->get('suc_empresa');
		// $Pacientes->eliminar = $request->get('eliminar');
		// $Pacientes->enviarwhatsapp = $request->get('enviarwhatsapp');
        Paciente::create([ 
			
			'sucursal' => $this-> sucursal,
			'Clave' => $this-> Clave,
			'Paciente' => $this-> Paciente,
			'Paterno' => $this-> Paterno,
			'Materno' => $this-> Materno,
			'Nombre' => $this-> Nombre,
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
			'suc_empresa' => $this-> suc_empresa,
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
			'eliminar' => $this-> eliminar,
			'enviarwhatsapp' => $this-> enviarwhatsapp
        ]);
		//$Pacientes->save();
        $this->resetInput();
		
		$this->emit('closeModal');
		session()->flash('message', 'Paciente Successfully created.');
    }

    public function edit($id)
    {
        $record = Paciente::findOrFail($id);

        $this->selected_id = $id; 
		$this->sucursal = $record-> sucursal;
		$this->Clave = $record-> Clave;
		$this->Paciente = $record-> Paciente;
		$this->Paterno = $record-> Paterno;
		$this->Materno = $record-> Materno;
		$this->Nombre = $record-> Nombre;
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
		$this->suc_empresa = $record-> suc_empresa;
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
		$this->eliminar = $record-> eliminar;
		$this->enviarwhatsapp = $record-> enviarwhatsapp;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'sucursal' => 'required',
		'Clave' => 'required',
		'suc_empresa' => 'required',
		'Empresa' => 'required',
		'eliminar' => 'required',
		'enviarwhatsapp' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Paciente::find($this->selected_id);
            $record->update([ 
			'sucursal' => $this-> sucursal,
			'Clave' => $this-> Clave,
			'Paciente' => $this-> Paciente,
			'Paterno' => $this-> Paterno,
			'Materno' => $this-> Materno,
			'Nombre' => $this-> Nombre,
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
			'suc_empresa' => $this-> suc_empresa,
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
			'eliminar' => $this-> eliminar,
			'enviarwhatsapp' => $this-> enviarwhatsapp
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
