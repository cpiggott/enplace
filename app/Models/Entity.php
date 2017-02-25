<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = 'entities';

    protected $fillable = [
        'position',
        'rotation',
        'value',
        'scene_id'
    ];

    public function scene(){
        return $this->belongsTo('App\Models\Scene');
    }
}
