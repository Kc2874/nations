<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected  $table ="countries";
    protected $primaryKey="country_id";
    use HasFactory;
    //Relación 1:M con regiones 
public function regiones(){
    //hasMany:parametros
    //1 Modelo a relacionar
    //FK del modelo actual en el modelo a relacionar 
    return $this->belongsTo(Region::class,
    'country_id');
}
public function idiomas(){
    //belongsToMany parametros
    //1.Modelo a relacionar
    //2.Tabla pivote
    //3.Clave foranea tabla pivote
    //4.FK del modelo a relacionar al pivote
    return $this->belongsToMany(Languages::class,'country_languages','country_id','language_id')
->withPivot('official');
}

}
