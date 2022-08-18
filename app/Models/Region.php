<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table ="regions";
    protected $primaryKey="region_id";
    use HasFactory;
    public function continente(){
        return $this->belongsTo(continent::class,'continent_id');
    }
    //Relación 1:M con regiones 
public function paises(){ 
    return $this->hasMany(Country::class,
    'region_id');
}
}
