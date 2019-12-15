<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloodType extends Model
{
    //
    protected $table ='bloodTypes';

    public function doners(){

        return $this->hasMany(Doner::class);
    }
}
