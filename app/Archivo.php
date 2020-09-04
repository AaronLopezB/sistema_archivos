<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    public function usuario()
    {
        return $this->hasOne('App\Users', 'usuario_id', 'id');
    }

    public function log_usuarios(){
    	return $this->belongsToMany('App\Users')->withPivot('usuario_id');
    }
}
