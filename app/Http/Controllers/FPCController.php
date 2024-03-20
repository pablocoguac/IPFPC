<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FPCController extends Controller
{
    public function FirsTeam()
    {
        $teams = array("Millonarios", "Nacional", "Tolima", "America");
        $randomNumber = mt_rand(1, 30);
        $randomIndex = mt_rand(0, 3);

        return response()->json(['First' => $teams[$randomIndex], 'Points' => $randomNumber]);
    }
}
