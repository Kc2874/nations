<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    protected  $table ="languages";
    protected $primaryKey="language_id";
    use HasFactory;
    //Relacion de muchos a muchos con paises
    public function paises(){
    return $this->belongsToMany(Country::class,
'country_language','language_id','country_id')->withPivot('official');
    }
}
