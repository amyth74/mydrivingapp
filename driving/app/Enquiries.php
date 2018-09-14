<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiries extends Model
{
    protected $table='tbl_enquiries';
    public $timestamps=false;

    public function fullName(){
        return $this->first_name . ' '.$this->last_name;
    }

    public function course(){
        return $this->belongsTo('App\Course','course_id','id');
    }
}
