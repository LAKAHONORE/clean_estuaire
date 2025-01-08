<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blanchisserie;
use App\Models\Config;
use App\Models\Pressing;
use App\Models\Repassage;
use App\Models\CollecteLivraison;

class ApiController extends Controller
{
    public function listConfig(){
        $config = Config::first();
        $blanchisserie = Blanchisserie::first();
        $pressing = Pressing::first();
        $repassage = Repassage::first();
        $collecte = CollecteLivraison::first();


        return response()->json([
            "status" => "200",
            "config" => $config,
            "blanchisserie"=> $blanchisserie,
            "pressing"=> $pressing,
            "repassage"=> $repassage,
            "collecte_livraison"=> $collecte
        ]);
    }
}
