<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];

    public function task(){
        return $this->hasMany(Task::class);
    }
}
