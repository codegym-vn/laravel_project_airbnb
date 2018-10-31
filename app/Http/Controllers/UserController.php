<?php

namespace App\Http\Controllers;

use App\Model\CalenderModel;
use App\Model\HousesModel;
use App\Model\KindEvaluateModel;
use App\Model\KindHouseModel;
use App\Model\StatisicalModel;
use App\User;
use Illuminate\Http\Request;

class UserController extends RetrievesllDataController
{
    public function showCalendar($id)
    {
        $calenders = CalenderModel::orderBy('id', 'desc')->get();
        $user = $this->user($id);
        return view('collection.admin.calendar', compact('calenders', 'user'));
    }

    public function showStatistics($id)
    {
        $price = 0;
        $user = $this->user($id);
        $statistics = StatisicalModel::where('id_user', $id)->get();
        foreach ($statistics as $statistic) {
//            if ($statistic->id_user)
            $price = $statistic->houses->price + $price;
        }
        return view('collection.userPostHouse.statistics', compact('user', 'statistics', 'price'));
    }

    public function feedback(Request $request, $id)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $conten = $request->input('conten');
        $kindEvaluate = new KindEvaluateModel();
        $kindEvaluate->id_house = $id;
        $kindEvaluate->conten = $conten;
        $kindEvaluate->phone = $phone;
        $kindEvaluate->email = $email;
        $kindEvaluate->name = $name;
        $kindEvaluate->save();
        return redirect(route('listBockHouse'));
    }

    public function calendar(Request $request, $id)
    {
        $house = HousesModel::find($id);
        $user = User::find($id);

        $information = $request->input('information');
        $calender = $request->input('calender');
        $name = $request->input('calender');
        $phone = $request->input('phone');
        $calendar = new CalenderModel();
        $calendar->id_house = $id;
        $calendar->name = $name;
        $calendar->calender = $calender;
        $calendar->information = $information;
        $calendar->phone = $phone;
        $calendar->save();
        return view('collection.userBockHouse.dashboard', compact('house' ,'user'))->with(['messenger' => ' Bạn đã đặt lịch thành công']);

    }
}
