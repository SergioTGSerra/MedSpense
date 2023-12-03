<?php

namespace App\Http\Controllers\Receptionist;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {       
        $appointments = Appointment::with('doctor.user', 'patient.user')->get();
        return view('app.dashboard.index', compact('appointments'));
    }
}