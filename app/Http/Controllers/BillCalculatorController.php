<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillCalculatorController extends Controller {

    public function index()
    {
        return view('billsplitter');
    }

    public function submit()
    {
        return view('billsummary');
    }
}