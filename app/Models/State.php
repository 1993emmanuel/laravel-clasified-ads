<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['country_id','name'];


    // funcion para obtener los country
    public function country(){
        return $this->belongsTo(Country::class);
    }

    //funcion para obtener las cities
    public function cities(){
        return $this->hasMany(City::class);
    }

}
