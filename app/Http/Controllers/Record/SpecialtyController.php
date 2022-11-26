<?php

namespace App\Http\Controllers\Record;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use function view;

class SpecialtyController extends Controller
{
    /**
     * List Specialists
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
        $specialties = Specialty::query()->has("doctors")->get();
        return view('pages.index', ['specialties' => $specialties]);
    }

    /**
     * DChoosing doctor page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Specialty $specialty)
    {
        $doctors = $specialty->doctors;
        return view('pages.specialty', ['doctors' => $doctors, 'specialty' => $specialty]);
    }
}

