<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialty;
use function view;

class DoctorController extends Controller
{
    public function index(Specialty $specialty)
    {
        $doctors = Doctor::all();
        return view('pages.index');
    }

    public function record(Specialty $specialty, Doctor $doctor)
    {

        return view('pages.detail',['specialty' => $specialty, 'doctor' => $doctor] );
    }
}
