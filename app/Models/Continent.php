<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar
    protected $table ="continents";

    //la clave primaria de esa tabla
    protected $primaryKey="continent_id";

    //omitir campos de auditoria
    public $timestamp=false;

    //relacion entre contiente y region
    public function regiones(){
        //relacion de uno a muchos con el modelo
        return $this->hasMany(Region::class, 'continent_id');
    }

    //relacion entre continente y pais
    public function paises(){
        return $this->hasManyThrough(Region::class, Country::class, 'continent_id', 'region_id');
    }

    use HasFactory;
}
