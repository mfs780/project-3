<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillCalculatorController extends Controller {

    public function index()
    {
        return 'Bill Calculator';
    }

    public function submit()
    {
        return 'Bill Summary';
    }
}