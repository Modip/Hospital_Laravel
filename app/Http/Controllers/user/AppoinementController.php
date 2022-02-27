<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppoinementController extends Controller
{
    //
    public function createAppointment(Request $request)
    {
        $appointment = new Appointment;
        $appointment=$request->name;
        $appointment=$request->email;
        $appointment=$request->departement;
        $appointment->save();
        
        return view('user.index');
    }
}
