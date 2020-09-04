<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function usuarios()
    {
        return $this->hasMany('App\User', 'id', 'departamento_id');
    }
}
