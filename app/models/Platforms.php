<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Platforms extends Model
{
    protected $table = 'platforms';
    public $timestamps = false;

    public function games()
    {
        return $this->hasMany('App\models\Games');
    }
}
