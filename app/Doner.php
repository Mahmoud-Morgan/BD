<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    //
    protected $table = 'doners';

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
