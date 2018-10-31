<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HousesModel extends Model
{
    protected $table = 'houses';

    public function address() {
        return $this->belongsTo('App\Model\AddressModel', 'id_address');
    }

    public function kindHouse() {
        return $this->belongsTo('App\Model\KindHouseModel', 'id_kind_house');
    }

    public function image() {
        return $this->hasMany('App\Model\ImageModel');
    }
}
