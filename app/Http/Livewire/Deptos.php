<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Depto;
use Carbon\Carbon;
use Exception;
use Barryvdh\DomPDF\Facade\Pdf;

class Deptos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sucursal, $Depto, $fecha_act, $fecha_sync, $flag_sucursales, $eliminar;
    public $updateMode = false;

    public function render()
    {
        //$siempre = Carbon::now()->format('Y-m-d');
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.deptos.view',[
            'deptos' => Depto::latest()
						->orWhere('sucursal', 'LIKE', $keyWord)
						->orWhere('Depto', 'LIKE', $keyWord)
						->orWhere('fecha_act', 'LIKE', $keyWord)
						->orWhere('fecha_sync', 'LIKE', $keyWord)
						->orWhere('flag_sucursales', 'LIKE', $keyWord)
						->orWhere('eliminar', 'LIKE', $keyWord)
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
		$this->Depto = null;
		$this->fecha_act = null;
		$this->fecha_sync = null;
		$this->flag_sucursales = null;
		$this->eliminar = null;
    }

    public function reportePDF()
    {
        $siemprehoy = Carbon::now()->format('d/m/Y');
        $actualhora = Carbon::now()->isoFormat('H:mm:ss A');
        $deptos = Depto::latest()->paginate(10);
        $pdf = Pdf::loadView('reporteDeptos', compact('deptos', 'siemprehoy', 'actualhora'))
        ->setPaper(array(0,0,1000.00,1000), 'portrait');
        return $pdf->stream('REPORTE');
    }

    public function store()
    {
        //$siempre = Carbon::now()->format('Y-m-d');
        $this->validate([
            'Depto' => 'required|min:2',
        ]);
        try{
            Depto::create([   
                'Depto' => $this-> Depto,
                'fecha_act' => $this-> fecha_act
            ]);
            $this->resetInput();
		    $this->emit('closeModal');
            session()->flash('message', 'Depto Successfully created.');
            return redirect('/deptos');
		    
        }        
        catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
        
    }

    public function edit($id)
    {
        $record = Depto::findOrFail($id);

        $this->selected_id = $id; 
		$this->sucursal = $record-> sucursal;
		$this->Depto = $record-> Depto;
		$this->fecha_act = $record-> fecha_act;
		$this->fecha_sync = $record-> fecha_sync;
		$this->flag_sucursales = $record-> flag_sucursales;
		$this->eliminar = $record-> eliminar;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'Depto' => 'required',
        ]);

        try{
            if ($this->selected_id) {
                $record = Depto::find($this->selected_id);
                $record->update([ 
                'sucursal' => $this-> sucursal,
                'Depto' => $this-> Depto,
                'fecha_act' => $this-> fecha_act,
                'fecha_sync' => $this-> fecha_sync,
                'flag_sucursales' => $this-> flag_sucursales,
                'eliminar' => $this-> eliminar
                ]);
    
                $this->resetInput();
                $this->updateMode = false;
                session()->flash('message', 'Depto Successfully updated.');
            }
        }
        catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
        
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Depto::where('id', $id);
            $record->delete();
        }
    }
}
