<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Solicitud;
use App\Models\Doctor;
use App\Models\Empresa;
use App\Models\Paciente;
use App\Models\Estxsol;
use App\Models\Estudio;

class Solicituds extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $key, $Id, $sucursal, $Solicitud, $Folio, $suc_paciente, $paciente, $pacientes, $Fecha, $suc_doctor, $Doctor, $suc_empresa, $Empresa, $Tipo_Pago, $Fecha_Entrega, $Anticipo, $Expediente, $Importe, $Tipo_toma, $Estatus, $Descuento, $Facturar_a, $Fur, $Total, $porcentaje, $Fecha_Entregado, $Factura, $NomCredencial, $Pagos, $NumImpResultados, $SeFactura, $Impreso, $Edad, $EdadTipo, $Sexo, $Notas, $pase, $tel, $VerificadoPor, $condicionesdepago, $numcta, $SolPDF, $procesar, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar, $subtotal, $iva, $retivaprct, $retivaimpte, $retisrprct, $retisrimpte;
    public $updateMode = false, $Tomas, $itemtotal, $Precio;
	public $empresa, $empresas, $estudio, $estudios;
	public $orderProducts, $id_paciente, $id_empresa, $id_estudio;

    public function render()
    {
		$doctores = Doctor::all();
		//$empresas = Empresa::all();
		//$pacientes = Paciente::all();
		$this->empresas = Empresa::all();
		$this->estudios = Estudio::all();
        $this->pacientes = Paciente::all();
		$this->solicitudes = Solicitud::all();
		if ($this->selected_id > 0){
            $this->paciente = Paciente::find($this->selected_id);
            $this->id_paciente = $this->paciente->id;
            return view('livewire.solicituds.view', [
                'estudios' => $this->estudios,
                'paciente' => $this->paciente,
				'solicitudes' => $this->solicitudes,
                'orderProducts' => $this->orderProducts,
            ]);
        }else{
            return view('livewire.solicituds.view', [
                'estudios' => $this->estudios,
                'pacientes' => $this->pacientes,
				'solicitudes' => $this->solicitudes,
                'orderProducts' => $this->orderProducts,
            ]);
        }
    }
	public function removeItem($key)
    {
		/*
        $this->subtotal = $this->subtotal - $this->orderProducts[$keyWord]['itemtotal'];
        $this->taxiva = (floatval($this->subtotal) * floatval($this->tax))/100;
        $this->total = floatval($this->subtotal) + floatval($this->taxiva);
        unset($this->orderProducts[$keyWord]);
        $this->emit('msgok', 'Eliminado con éxito');*/
    }
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	public function doAction($action){
        $this->selected_id = $action;
    }
	public function addProduct(){
        if($this->id_estudio == '' || $this->Tomas == '' || $this->sucursal == '' || $this->Solicitud == ''){
            $this->emit('msg-error', 'Ingrese todos los campos para agregar un producto.');
        }
        else{
            $estudio = Estudio::find($this->id_estudio);
            $Nombre = $estudio->Nombre;
            //$this->itemtotal = floatval($this->Tomas) * floatval($this->Precio);
           //$this->subtotal = floatval($this->subtotal) * floatval($this->itemtotal);
            //$this->taxiva = (floatval($this->subtotal) * floatval($this->tax))/100;
            //$this->total = floatval($this->subtotal) * floatval($this->taxiva);
            $orderProducts = array (
                'id_estudio' => $this->id_estudio,
                'Solicitud' => $Solicitud,
				//'Nombre' => $Nombre,
                //'Tomas' => $this->Tomas,
				//'sucursal' => $this->sucursal,
                //'buy_price' => $this->buy_price,
                //'sell_price' => $this->sell_price,
                //'itemtotal' => $this->itemtotal,
            );
            $this->orderProducts[] = $orderProducts;
            $this->emit('msgok', 'Agregado con éxito');
            $this->resetInput();
        }
    }
    private function resetInput()
    {		
		$this->Id = null;
		$this->sucursal = null;
		$this->Solicitud = null;
		$this->Folio = null;
		$this->suc_paciente = null;
		$this->paciente = null;
		$this->Fecha = null;
		$this->suc_doctor = null;
		$this->Doctor = null;
		$this->suc_empresa = null;
		$this->Empresa = null;
		$this->Tipo_Pago = null;
		$this->Fecha_Entrega = null;
		$this->Anticipo = null;
		$this->Expediente = null;
		$this->Importe = null;
		$this->Tipo_toma = null;
		$this->Estatus = null;
		$this->Descuento = null;
		$this->Facturar_a = null;
		$this->Fur = null;
		$this->Total = null;
		$this->porcentaje = null;
		$this->Fecha_Entregado = null;
		$this->Factura = null;
		$this->NomCredencial = null;
		$this->Pagos = null;
		$this->NumImpResultados = null;
		$this->SeFactura = null;
		$this->Impreso = null;
		$this->Edad = null;
		$this->EdadTipo = null;
		$this->Sexo = null;
		$this->Notas = null;
		$this->pase = null;
		$this->tel = null;
		$this->Estudios = null;
		$this->VerificadoPor = null;
		$this->condicionesdepago = null;
		$this->numcta = null;
		$this->SolPDF = null;
		$this->procesar = null;
		$this->fecha_act = null;
		$this->fecha_sync = null;
		$this->flag_sucursales = null;
		$this->eliminar = null;
		$this->subtotal = null;
		$this->iva = null;
		$this->retivaprct = null;
		$this->retivaimpte = null;
		$this->retisrprct = null;
		$this->retisrimpte = null;
    }
	public function storeOrder()
    {
        $this->validate([
            'id_paciente' => 'required',
		    'Tipo_toma' => 'required', 
		    'Fecha' => 'required',
        ]);

		$order = Solicitud::create([ 
			'id_paciente' => $this-> id_paciente,
			'Solicitud' => $this-> Solicitud,
			'sucursal' => $this-> sucursal,
            'Estatus' => $this-> Estatus,
			'suc_paciente' => $this-> suc_paciente,
			'suc_empresa' => $this->suc_empresa,
            'Tipo_toma' => $this-> Tipo_toma,
			'pase' => $this-> pase,
			'Notas' => $this-> Notas,
			'Folio' => $this-> Folio,
        ]);
        foreach($this->orderProducts as $key => $estudio)
        {
            $results = array(
                "id_estxsol" => $order->id,
                "id_estudio" => $estudio['id_estudio'],
                "Tomas" => $estudio['Tomas'],
                //"buy_price" => $product['buy_price'],
                //"sell_price" => $product['sell_price'],
                "created_at" => now(),
                "updated_at" => now()
            );
            Estxsol::insert($results);
        }
        $this->emit('msgok', 'Compra creada con éxito');
        /*foreach($orderProducts as $keyWord => $estudios)
        {
            $item = Estudio::find($estudios['product_id']);
            $stock = $item->stock + $estudios['Tomas'];
            $item->update([
                'stock' => $stock,
                'buy_price' => $estudios['buy_price'],
                'sell_price' => $estudios['sell_price'],
                
                
            ]);
        }*/
        
		session()->flash('message', 'Actualizado.');
        return redirect()->route('livewire.solicituds.view');
    }
    // public function store()
    // {
    //     $this->validate([
	// 	'Id' => 'required',
	// 	'sucursal' => 'required',
	// 	'Solicitud' => 'required',
	// 	'suc_paciente' => 'required',
	// 	'suc_doctor' => 'required',
	// 	'suc_empresa' => 'required',
	// 	'SolPDF' => 'required',
	// 	'procesar' => 'required',
	// 	'eliminar' => 'required',
    //     ]);

    //     Solicitud::create([ 
	// 		'Id' => $this-> Id,
	// 		'sucursal' => $this-> sucursal,
	// 		'Solicitud' => $this-> Solicitud,
	// 		'Folio' => $this-> Folio,
	// 		'suc_paciente' => $this-> suc_paciente,
	// 		'paciente' => $this-> paciente,
	// 		'Fecha' => $this-> Fecha,
	// 		'suc_doctor' => $this-> suc_doctor,
	// 		'Doctor' => $this-> Doctor,
	// 		'suc_empresa' => $this-> suc_empresa,
	// 		'Empresa' => $this-> Empresa,
	// 		'Tipo_Pago' => $this-> Tipo_Pago,
	// 		'Fecha_Entrega' => $this-> Fecha_Entrega,
	// 		'Anticipo' => $this-> Anticipo,
	// 		'Expediente' => $this-> Expediente,
	// 		'Importe' => $this-> Importe,
	// 		'Tipo_toma' => $this-> Tipo_toma,
	// 		'Estatus' => $this-> Estatus,
	// 		'Descuento' => $this-> Descuento,
	// 		'Facturar_a' => $this-> Facturar_a,
	// 		'Fur' => $this-> Fur,
	// 		'Total' => $this-> Total,
	// 		'porcentaje' => $this-> porcentaje,
	// 		'Fecha_Entregado' => $this-> Fecha_Entregado,
	// 		'Factura' => $this-> Factura,
	// 		'NomCredencial' => $this-> NomCredencial,
	// 		'Pagos' => $this-> Pagos,
	// 		'NumImpResultados' => $this-> NumImpResultados,
	// 		'SeFactura' => $this-> SeFactura,
	// 		'Impreso' => $this-> Impreso,
	// 		'Edad' => $this-> Edad,
	// 		'EdadTipo' => $this-> EdadTipo,
	// 		'Sexo' => $this-> Sexo,
	// 		'Notas' => $this-> Notas,
	// 		'pase' => $this-> pase,
	// 		'tel' => $this-> tel,
	// 		'Estudios' => $this-> Estudios,
	// 		'VerificadoPor' => $this-> VerificadoPor,
	// 		'condicionesdepago' => $this-> condicionesdepago,
	// 		'numcta' => $this-> numcta,
	// 		'SolPDF' => $this-> SolPDF,
	// 		'procesar' => $this-> procesar,
	// 		'fecha_act' => $this-> fecha_act,
	// 		'fecha_sync' => $this-> fecha_sync,
	// 		'flag_sucursales' => $this-> flag_sucursales,
	// 		'eliminar' => $this-> eliminar,
	// 		'subtotal' => $this-> subtotal,
	// 		'iva' => $this-> iva,
	// 		'retivaprct' => $this-> retivaprct,
	// 		'retivaimpte' => $this-> retivaimpte,
	// 		'retisrprct' => $this-> retisrprct,
	// 		'retisrimpte' => $this-> retisrimpte
    //     ]);
        
    //     $this->resetInput();
	// 	$this->emit('closeModal');
	// 	session()->flash('message', 'Solicitud Successfully created.');
    // }

    public function edit($id)
    {
        $record = Solicitud::findOrFail($id);

        $this->selected_id = $id; 
		$this->Id = $record-> Id;
		$this->sucursal = $record-> sucursal;
		$this->Solicitud = $record-> Solicitud;
		$this->Folio = $record-> Folio;
		$this->suc_paciente = $record-> suc_paciente;
		$this->paciente = $record-> paciente;
		$this->Fecha = $record-> Fecha;
		$this->suc_doctor = $record-> suc_doctor;
		$this->Doctor = $record-> Doctor;
		$this->suc_empresa = $record-> suc_empresa;
		$this->Empresa = $record-> Empresa;
		$this->Tipo_Pago = $record-> Tipo_Pago;
		$this->Fecha_Entrega = $record-> Fecha_Entrega;
		$this->Anticipo = $record-> Anticipo;
		$this->Expediente = $record-> Expediente;
		$this->Importe = $record-> Importe;
		$this->Tipo_toma = $record-> Tipo_toma;
		$this->Estatus = $record-> Estatus;
		$this->Descuento = $record-> Descuento;
		$this->Facturar_a = $record-> Facturar_a;
		$this->Fur = $record-> Fur;
		$this->Total = $record-> Total;
		$this->porcentaje = $record-> porcentaje;
		$this->Fecha_Entregado = $record-> Fecha_Entregado;
		$this->Factura = $record-> Factura;
		$this->NomCredencial = $record-> NomCredencial;
		$this->Pagos = $record-> Pagos;
		$this->NumImpResultados = $record-> NumImpResultados;
		$this->SeFactura = $record-> SeFactura;
		$this->Impreso = $record-> Impreso;
		$this->Edad = $record-> Edad;
		$this->EdadTipo = $record-> EdadTipo;
		$this->Sexo = $record-> Sexo;
		$this->Notas = $record-> Notas;
		$this->pase = $record-> pase;
		$this->tel = $record-> tel;
		$this->Estudios = $record-> Estudios;
		$this->VerificadoPor = $record-> VerificadoPor;
		$this->condicionesdepago = $record-> condicionesdepago;
		$this->numcta = $record-> numcta;
		$this->SolPDF = $record-> SolPDF;
		$this->procesar = $record-> procesar;
		$this->fecha_act = $record-> fecha_act;
		$this->fecha_sync = $record-> fecha_sync;
		$this->flag_sucursales = $record-> flag_sucursales;
		$this->eliminar = $record-> eliminar;
		$this->subtotal = $record-> subtotal;
		$this->iva = $record-> iva;
		$this->retivaprct = $record-> retivaprct;
		$this->retivaimpte = $record-> retivaimpte;
		$this->retisrprct = $record-> retisrprct;
		$this->retisrimpte = $record-> retisrimpte;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'Id' => 'required',
		'sucursal' => 'required',
		'Solicitud' => 'required',
		'suc_paciente' => 'required',
		'suc_doctor' => 'required',
		'suc_empresa' => 'required',
		'SolPDF' => 'required',
		'procesar' => 'required',
		'eliminar' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Solicitud::find($this->selected_id);
            $record->update([ 
			'Id' => $this-> Id,
			'sucursal' => $this-> sucursal,
			'Solicitud' => $this-> Solicitud,
			'Folio' => $this-> Folio,
			'suc_paciente' => $this-> suc_paciente,
			'paciente' => $this-> paciente,
			'Fecha' => $this-> Fecha,
			'suc_doctor' => $this-> suc_doctor,
			'Doctor' => $this-> Doctor,
			'suc_empresa' => $this-> suc_empresa,
			'Empresa' => $this-> Empresa,
			'Tipo_Pago' => $this-> Tipo_Pago,
			'Fecha_Entrega' => $this-> Fecha_Entrega,
			'Anticipo' => $this-> Anticipo,
			'Expediente' => $this-> Expediente,
			'Importe' => $this-> Importe,
			'Tipo_toma' => $this-> Tipo_toma,
			'Estatus' => $this-> Estatus,
			'Descuento' => $this-> Descuento,
			'Facturar_a' => $this-> Facturar_a,
			'Fur' => $this-> Fur,
			'Total' => $this-> Total,
			'porcentaje' => $this-> porcentaje,
			'Fecha_Entregado' => $this-> Fecha_Entregado,
			'Factura' => $this-> Factura,
			'NomCredencial' => $this-> NomCredencial,
			'Pagos' => $this-> Pagos,
			'NumImpResultados' => $this-> NumImpResultados,
			'SeFactura' => $this-> SeFactura,
			'Impreso' => $this-> Impreso,
			'Edad' => $this-> Edad,
			'EdadTipo' => $this-> EdadTipo,
			'Sexo' => $this-> Sexo,
			'Notas' => $this-> Notas,
			'pase' => $this-> pase,
			'tel' => $this-> tel,
			'Estudios' => $this-> Estudios,
			'VerificadoPor' => $this-> VerificadoPor,
			'condicionesdepago' => $this-> condicionesdepago,
			'numcta' => $this-> numcta,
			'SolPDF' => $this-> SolPDF,
			'procesar' => $this-> procesar,
			'fecha_act' => $this-> fecha_act,
			'fecha_sync' => $this-> fecha_sync,
			'flag_sucursales' => $this-> flag_sucursales,
			'eliminar' => $this-> eliminar,
			'subtotal' => $this-> subtotal,
			'iva' => $this-> iva,
			'retivaprct' => $this-> retivaprct,
			'retivaimpte' => $this-> retivaimpte,
			'retisrprct' => $this-> retisrprct,
			'retisrimpte' => $this-> retisrimpte
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Solicitud Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Solicitud::where('id', $id);
            $record->delete();
        }
    }
}