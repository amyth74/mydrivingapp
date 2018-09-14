<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='tbl_courses';
    public $timestamps=false;

    public function fullName(){
        return $this->first_name . ' '.$this->last_name;
    }
}
