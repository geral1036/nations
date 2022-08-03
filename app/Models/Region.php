<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
     //la tabla a conectar
     protected $table ="regions";

     //la clave primaria de esa tabla
     protected $primaryKey="region_id";
 
     //omitir campos de auditoria
     public $timestamp=false;

     //relacion entre region y paises
     public function paises(){
        return $this->hasMany(Country::class, 'region_id');
     }

     //relacion entre region y continente
     public function continente(){
        return $this->belongsTo(Continent::class, 'continent_id');
     }
    use HasFactory;
}
