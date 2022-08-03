<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar
    protected $table ="countries";

    //la clave primaria de esa tabla
    protected $primaryKey="country_id";

    //omitir campos de auditoria
    public $timestamp=false;

    //relacion de pais con region
    public function region(){
        return $this->belongsTo(Region::class, 'region_id');
     }

     //relacion m a m con lenguajes
    public function languages(){
        //relacion de muchos a muchos con el modelo
        return $this->belongsToMany(Language::class, 'country_languages', 'country_id' ,'language_id',);
    }
    use HasFactory;
}
