<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class governorate extends Model
{
    //
    protected $table ='governorates';

    public function cities()
    {
        return $this->hasMany(citie::class);
    }
}
