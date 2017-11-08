<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillCalculatorController extends Controller
{

    public function index(Request $request)
    {
        return view('billsplitter')->with([
            'split' => session('split')
        ]);
    }

    public function summary()
    {
        $split = session('split');
        $tab = session('tab');
        $tip = session('tip');
        $round = session('round');

        if(!isset($split)) {
            return redirect('/');
        }

        $final = ($tab + $tab * $tip) / $split;
        $rounded = $round == 1 ? ceil($final) : $final;

        return view('billsummary')->with([
            'split' => $split,
            'rounded' => $rounded
        ]);
    }

    public function submit(Request $request)
    {
        $this->validate($request, [
            'split' => 'required|min:1',
            'tab' => 'required|min:0'
        ]);

        $split = $request->input('split');
        $tab = $request->input('tab');
        $tip = $request->input('tip');
        $round = $request->input('round');
        return redirect('/summary')->with([
            'split' => $split,
            'tab' => $tab,
            'tip' => $tip,
            'round' => $round
        ]);
    }
}
