<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    function current(Request $request)
    {
        return view('dashboard.current');
    }

    function past(Request $request)
    {
        return view('dashboard.past');
    }

    function addEmployee(Request $request)
    {
        return view('dashboard.add_employee');
    }
}
