<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class OpsController extends Controller
{
    public function Sum(Request $request)
    {
        $a = $request->query('a');
        $b = $request->query('b');

        $result = $a + $b;

        return response()->json(['result' => $result]);
    }

    public function Mult(Request $request)
    {
        $a = $request->query('a');
        $b = $request->query('b');

        $result = $a * $b;

        return response()->json(['result' => $result]);
    }

    public function Subs(Request $request){
        $a = $request->query('a');
        $b = $request->query('b');

        $result = $a - $b;

        return response()->json(['result' => $result]);
    }

    public function Div(Request $request){
        $a = $request->query('a');
        $b = $request->query('b');

        $result = $a / $b;

        return response()->json(['result' => $result]);
    }

    public function Pow(Request $request){
        $val = $request->query('val');
        $exp = $request->query('exp');

        $result = pow($val, $exp);

        return response()->json(['result' => $result]);
    }

    public function Cub(Request $request){
        $val = $request->query('val');

        $result = pow($val, 3);

        return response()->json(['result' => $result]);

    }
}
