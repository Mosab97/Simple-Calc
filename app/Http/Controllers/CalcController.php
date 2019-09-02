<?php

namespace App\Http\Controllers;

use App\Calc;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index($num1 = 0, $num2 = 0)
    {
        $calc = Calc::all()->last();
        if ($num1 === 0 && $num2 === 0) {
            $calc->sum = 0;
            $calc->sub = 0;
            $calc->mul = 0;
            $calc->div = 0;
        }
        return view('welcome', [
            'res' => $calc,
            'num1' => $num1,
            'num2' => $num2,
        ]);
    }

    public function res(Request $request)
    {
        $calc = new Calc();
        $num1 = (int) $request->input('num1');
        $num2 = (int) $request->input('num2');
        if (!is_int($num1) && !is_int($num2)) {
            return redirect()->route('Calc.index', [
                'num1' => $num1,
                'num2' => $num2,
            ])->with('error', 'invalid numbers');
        }

        $calc->num1 = $num1;
        $calc->num2 = $num2;
        $calc->sum = $num1 + $num2;
        $calc->sub = $num1 - $num2;
        $calc->mul = $num1 * $num2;

        if ($num2 === 0) {
            return redirect()->route('Calc.index', [
                'num1' => $num1,
                'num2' => $num2,
            ])->with('error', "num2 must be grater than 0 to div $num1 / $num2");
        }
        $calc->div = $num1 / $num2;
        $calc->save();
        return redirect()->route('Calc.index', [
            'num1' => $num1,
            'num2' => $num2,
        ])->with('success', 'numbers Calculated successfully');
        dd($request);
    }

    public function logs()
    {
        $logs = Calc::all();
        return view('logs', [
            'logs' => $logs
        ]);
    }
}
