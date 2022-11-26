<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{

    /**
     * List Scheduler doctor
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(Specialty $specialty, Doctor $doctor, Request $request)
    {
        $times_array = [
            '09:00:00',
            '10:30:00',
            '12:00:00',
            '15:30:00',
            '17:00:00',
            '18:30:00',
            '20:00:00',
        ];


        $date_sql = date("Y-m-d", strtotime($request->date));

        $schedules_day = Schedule::query()
            ->whereDate('date', $date_sql)
            ->where([
                ['doctor_id', $doctor->id],
                ['specialty_id', $specialty->id],
            ])->pluck('start');

        //$schedules_day = json_decode($schedules_day, true);


        foreach ($times_array as $key => $time) {
            $times[$key]["id"] = $key . 'lsp';
            $times[$key]["name"] = $time;
            $times[$key]["date"] = $date_sql;

            if ($schedules_day->search($time) == true) {
                $times[$key]["status"] = 'blocked';
                $times[$key]["type"] = 'event';
            } else {
                $times[$key]["badge"] = '1 hour';
                $times[$key]["type"] = 'birthday';
            }

        }


        return response()->json([$times]);
    }
}
