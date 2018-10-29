<?php

use App\Model\HousesModel;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = new HousesModel();
        $houses->name = 'Ha Noi hotel';
        $houses->address = 'hà nội';
        $houses->room = 'khách sạn';
        $houses->number_room = '4';
        $houses->number_bathroom = '2';
        $houses->describe = 'VIP';
        $houses->price = '10.000.000VND/1ngày';
        $houses->id_kind_house = 1;
        $houses->save();

        $houses = new HousesModel();
        $houses->name = 'HCM hotel';
        $houses->address = 'Hồ Chí Minh';
        $houses->room = 'khách sạn';
        $houses->number_room = '5';
        $houses->number_bathroom = '2';
        $houses->describe = 'VIP';
        $houses->price = '10.000.000VND/1ngày';
        $houses->id_kind_house = 2;
        $houses->save();

        $houses = new HousesModel();
        $houses->name = 'Hải Phòng hotel';
        $houses->address = 'Hải Phòng';
        $houses->room = 'khách sạn';
        $houses->number_room = '3';
        $houses->number_bathroom = '2';
        $houses->describe = 'VIP';
        $houses->price = '5.000.000VND/1ngày';
        $houses->id_kind_house = 3;
        $houses->save();

    }
}
