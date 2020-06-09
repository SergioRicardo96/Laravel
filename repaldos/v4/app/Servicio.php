<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['nombre','costo','mora','horario','imagen1','imagen2','imagen3','activo'];
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
