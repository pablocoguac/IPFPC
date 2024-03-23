<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FPCController extends Controller
{
    public function FirsTeam()
    {
        $teams = array("Millonarios", "Nacional", "Tolima", "America", "Santa Fe", "Aguilas", "Patriotas");
        $randomNumber = mt_rand(1, 30);
        $randomIndex = mt_rand(0, 4);

        return response()->json(['First' => $teams[$randomIndex], 'Points' => $randomNumber]);
    }

    public function MatchFirstQuarter()
    {
        $months = array("Jan", "Feb", "Mar");
        $randomDay = mt_rand(1, 30);
        $randomIndex = mt_rand(0, 2);

        return response()->json(['Month' => $months[$randomIndex], 'Day' => $randomDay]);
    }
}
