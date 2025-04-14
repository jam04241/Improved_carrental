<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Customer;

class EmployeeController extends Controller
{
    public function dashboard(): View
    {
        return view('employee.dashboard');
    }

    public function rental_agreement(): View
    {
        return view('employee.rental_agreement');
    }

    public function customer_records(): View
    {
        $customers = Customer::all();
        return view('employee.customer_records', ['customers' => $customers]);
    }

    public function employee_records(): View
    {
        return view('employee.employee');
    }

    
}
