<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialty;
use function view;

class DoctorController extends Controller
{

    /**
     * Detail page Doctor
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function record(Specialty $specialty, Doctor $doctor)
    {
        return view('pages.detail', ['specialty' => $specialty, 'doctor' => $doctor]);
    }

}
