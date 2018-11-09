<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    public $timestamps = false;
    /*
    protected $casts = [
        'release_date'  => 'date:d/m/Y',
        'created_at' => 'date:d/m/Y',
    ];
    */

    protected $fillable = ['platform_id', 'name', 'is_finished' ,'release_date', 'created_at'];

    public function platforms()
    {
        return $this->belongsTo('App\models\Platforms', 'platform_id' , 'id');
    }


    public function getIsFinishedAttribute($value)
    {
        return ($value) ? 'Oui' : 'Non';
    }







}
