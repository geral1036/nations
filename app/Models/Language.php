<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //la tabla a conectar
    protected $table ="languages";

    //la clave primaria de esa tabla
    protected $primaryKey="language_id";

    //omitir campos de auditoria
    public $timestamp=false;

    //relacion m a m con paises
    public function paises(){
        //relacion de muchos a muchos con el modelo
        return $this->belongsToMany(Country::class, 'country_languages', 'language_id',  'country_id');
    }
    use HasFactory;
}
