<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function home(): View
    {
        return view('customer.home');
    }
}
