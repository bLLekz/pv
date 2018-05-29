<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonalController extends Controller
{
    public function personal()
    {
        return view('personal');
    }
    public function update(Request $request)
    {
        if ($request-> ajax()){
            $name = $request->name;
            $email = $request->email;
            if ($name and $email ){
                $done = DB::update('update `users` set `name` = ?, `email` = ? where `id`= ?', [$name,$email,Auth::id()]);
                $message = '<div class="message_done alert_msg">Ваши успешно сохранены!</div>';
                return Response($message);
            }
            else{
                $message = '<div class="message_wrong alert_msg">Проверьте правильность данных!</div>';
                return Response($message);
            }

        }

    }
    // обновление пароля
    public function password(Request $request)
    {
        if ($request-> ajax()){
            $old = $request->po;
            $new = $request->pn;
            $re = $request->pre;
            if ($old != '' and $new != '' and $re != ''){
                if (Hash::check($old, Auth::user()->password)) {
                    if ($old != $new){
                        if (($new == $re) and ($re != '' and $new != '') ){
                            DB::update('update `users` set `password` = ? where `id`= ?', [bcrypt($new),Auth::id()]);
                            $message = '<div class="message_done alert_msg">Пароль успешно изменён!</div>';
                            return Response($message);
                        }
                        else{
                            $message = '<div class="message_wrong alert_msg">Пароли не совпадают!</div>';
                            return Response($message);
                        }
                    }
                    else{
                        $message = '<div class="message_wrong alert_msg">Новый и старый пароль совпадают!</div>';
                        return Response($message);
                    }


                }
                else{
                    $message = '<div class="message_wrong alert_msg">Старый пароль неверный!</div>';
                    return Response($message);
                }
            }
            else{
                $message = '<div class="message_wrong alert_msg">Не все поля заполнены!</div>';
                return Response($message);
            }

        }

    }
    // обновление идентификации
    public function update2(Request $request)
    {
        if ($request-> ajax()){
            $series = $request->series;
            $number = $request->number;
            $day = $request->day;
            $month = $request->month;
            $year = $request->year;
            if ($series != '' and $number != '' and $day != '' and $month != '' and $year != ''){
                DB::update('update `users` set `pasp_series` = ?, `pasp_number` = ?, `date_day` = ?, `date_month` = ?, `date_year` = ? 
                where `id`= ?', [$series, $number, $day, $month, $year, Auth::id()]);
                $message = '<div class="message_done alert_msg">Данные успешно обновленны!</div>';
                return Response($message);
            }
            else{
                $message = '<div class="message_wrong alert_msg">Не все поля заполнены!</div>';
                return Response($message);
            }
        }
    }

}
