<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = 'commentaires';
    public function user()
    {
    return $this->belongsTo('App\User','user_id','id');
    }
    public function chapitre()
    {
    return $this->belongsTo('App\Chapitre','chapitre_id','id');
    }
}
