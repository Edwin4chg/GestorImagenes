<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';

    protected $primaryKey = 'foto_id';
    
    protected $fillable = ['foto_nombre', 'foto_descripcion', 'foto_ruta', 'album_id'];

    public function album(){
        return $this->hasMany('App\Models\Album', 'album_id', 'album_id');
    }
}
