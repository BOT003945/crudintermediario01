<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antibiotico extends Model
{
	use HasFactory;
	
    public $timestamps = false;

    protected $table = 'antibioticos';

    protected $fillable = ['descripcion'];

    public function detallegrupoantibioticos(){
        return $this->hasMany(DetalleGrupoAntibiotico::class, 'id');
    }
	
    /* public function estudios()
    {
        return $this->hasMany('App\Models\Estudio', 'depto', 'id');
    } */
    
}
