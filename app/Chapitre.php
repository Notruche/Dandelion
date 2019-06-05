<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    protected $table = 'chapitres';
    public function commentaire()
    {
    return $this->hasMany('App\Commentaire','chapitre_id','id');
    }
}
