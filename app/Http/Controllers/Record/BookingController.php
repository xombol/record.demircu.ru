<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\Specialty;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Specialty $specialty, Doctor $doctor, Request $request)
    {

        $schedule = new Schedule();
        $schedule->doctor_id = $doctor->id;
        $schedule->specialty_id = $specialty->id;
        $schedule->date = date("Y-m-d", strtotime($request->date));
        $schedule->start =  $request->time;
        $schedule->end = $request->time;
        $schedule->interval = 1;
        $schedule->period = 1;


        if ($schedule->save()) {
            $booking = new Booking();

            $booking->schedule_id = $schedule->id;
            $booking->name = $request->name;
            $booking->phone = $request->phone_modal;
            $booking->time = date("Y-m-d h:m", strtotime($request->date. $request->time));
            $booking->save();
        }

        return response()->json($request);
    }
}
