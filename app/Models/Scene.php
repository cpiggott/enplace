<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $table = 'scenes';

    protected $fillable = [
        'title',
        'shareable_link',
        'editable_link',
        'uuid',
        'enplace_user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\EnplaceUser');
    }


}
