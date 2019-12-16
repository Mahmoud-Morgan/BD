<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    //
    protected $table = 'donors';

    public function bloodTypes()
    {
        return $this->belongsTo(bloodType::class,'d_b_id','b_id');
    }

    public function governorates()
    {
        return $this->belongsTo(governorate::class,'d_governorate','id');
    }

    public function cities()
    {
        return $this->belongsTo(citie::class,'d_city','c_id');
    }
}
