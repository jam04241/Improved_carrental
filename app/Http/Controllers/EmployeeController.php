<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function dashboard(): View
    {
        return view('employee.dashboard');
    }
}
