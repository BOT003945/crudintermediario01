<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Paciente;
use App\Models\Empresa;

class Pacientes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sucursal, $Paciente, $Paterno, $Materno, $Nombre, $FecNac, $Sexo, $Calle, $Numero, $Rfc, $Estudios, $Ult_solicitud, $Fec_alta, $Importe, $Importe_Acum, $Saldo, $EmpresaAnt, $suc_empresa, $Empresa, $Foraneo, $Descuento, $Titular, $Estado, $Municipio, $Localidad, $Cp, $Colonia, $Credencial, $NumCredencial, $Telefono, $NumEmpleado, $Pais, $cliente, $email, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar, $enviarwhatsapp;
    public $updateMode = false;
	public $dateFrom, $dateTo;

    public function render()
    {
		$valor = 8;
		$fechas = Paciente::whereDate('Fec_alta', '>=', now()->subDays(30))->get();
		$pacientes = Paciente::all();
		$empresas = Empresa::all();
		$dateFrom = '%'.$this->dateFrom .'%';
		$keyWord = '%'.$this->keyWord .'%';
		
	return view('livewire.pacientes.view', compact('empresas', 'valor'/*,'fechas'*/),[
            'pacientes' => Paciente::latest()
						->orWhere('sucursal', 'LIKE', $keyWord)
						
						->orWhere('Paciente', 'LIKE', $keyWord)
					
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
	

	public function reportePDF()
    {
        $siemprehoy = Carbon::now()->toDateString();
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');
        $pacientes = Paciente::latest()->paginate(7);
        $pdf = Pdf::loadView('reportepacientes', compact('pacientes','actualhora','siemprehoy'))
		->setPaper(array(0,0,700.00,1200), 'portrait');
        return $pdf->stream('REPORTE');
        //Obtenemos los registros
        //Obtenemos los registros
        // $registros = Paciente::latest()->paginate(10);

        // $this->fpdf->AddPage();
        // $this->fpdf->SetTextColor(35,56,113);
        // $this->fpdf->SetFont('Arial','B',11);
        // $this->fpdf->Image('https://www.inadware.com.mx/images/Logoinadware0001.png',10,10,50,0,'PNG');

        // $this->fpdf->Cell(0,10,utf8_decode("Listado Clientes"),0,"","C");

        // $this->fpdf->Ln();
        // $this->fpdf->Ln();
        // $this->fpdf->SetTextColor(0,0,0);  // Establece el color del texto 
        // $this->fpdf->SetFillColor(206, 246, 245); // establece el color del fondo de la celda 
        // $this->fpdf->SetFont('Arial','B',10); 
        //  //El ancho de las columnas debe de sumar promedio 190        
        
        //  $this->fpdf->cell(14.61,8,utf8_decode("Clave"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Fec. Alta"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Nombre"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("A.Paterno"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("A.Materno"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Fecha de Nacimiento"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Sexo"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Domicilio"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("C.P"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Estado"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Municipio"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Teléfono"),1,"","L",true);
        //  $this->fpdf->cell(14.61,8,utf8_decode("Email"),1,"","L",true);


        //  foreach ($registros as $reg)
        //  {
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Paciente),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Fec_alta),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Nombre),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Paterno),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Materno),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->FecNac),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Sexo),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Calle),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Cp),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Estado),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Municipio),1,"","L",true);
        //     $this->fpdf->cell(14.61,8,utf8_decode($reg->Telefono),1,"","L",true);
        //     $this->fpdf->cell(14.61,6,utf8_decode($reg->email),1,"","L",true);
        //     $this->fpdf->Ln(); 
        //  }

        // $this->fpdf->Output();

        // exit;
    }

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
		return redirect('/pacientes');
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
