<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\GrupoAntibiotico;

class GrupoAntibioticos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $descripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.grupo_antibioticos.view', [
            'grupoAntibioticos' => GrupoAntibiotico::latest()
						->orWhere('descripcion', 'LIKE', $keyWord)
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
		$this->descripcion = null;
    }

    public function store()
    {
        $this->validate([
        ]);

        GrupoAntibiotico::create([ 
			'descripcion' => $this-> descripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'GrupoAntibiotico Successfully created.');
    }

    public function edit($id)
    {
        $record = GrupoAntibiotico::findOrFail($id);

        $this->selected_id = $id; 
		$this->descripcion = $record-> descripcion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = GrupoAntibiotico::find($this->selected_id);
            $record->update([ 
			'descripcion' => $this-> descripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'GrupoAntibiotico Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = GrupoAntibiotico::where('id', $id);
            $record->delete();
        }
    }
}
