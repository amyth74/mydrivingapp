<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='tbl_booking';
    public $timestamps=false;

    public function enquiry(){
        return $this->belongsTo('App\Enquiries','enquiries_id','id');
    }
}
