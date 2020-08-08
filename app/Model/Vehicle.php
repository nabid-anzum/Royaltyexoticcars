<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //

    public function category(){
        return $this->belongsTo('App\Model\VehicleCategory','category_id');
    }

    public function subcategory(){
        return $this->belongsTo('App\Model\VehicleCategory','category_id');
    }

    public function brand(){
        return $this->belongsTo('App\Model\VehicleBrand','brand_id');
    }
}
