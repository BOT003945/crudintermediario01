<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bacteria extends Model
{
	use HasFactory;
	
    public $timestamps = false;

    protected $table = 'bacterias';

    protected $fillable = ['descripcion'];
	
    /* public function estudios()
    {
        return $this->hasMany('App\Models\Estudio', 'depto', 'id');
    } */
    
}
