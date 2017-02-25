<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnplaceUser extends Model
{
    protected $table = "enplace_users";

    protected $fillable = [
        'email'
    ];

    public function scences(){
        return $this->hasMany('App\Models\Scences');
    }

}
