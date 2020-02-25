<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';

    protected $fillable = [
        'name',
        'description'
    ];

    public function resources()
    {
        return $this->hasMany('resource');
    }
}
