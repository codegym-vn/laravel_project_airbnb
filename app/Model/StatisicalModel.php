<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StatisicalModel extends Model
{
    protected $table = 'statisical';

    public function houses()
    {
        return $this->belongsTo('App\Model\HousesModel', 'id_house');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

}
