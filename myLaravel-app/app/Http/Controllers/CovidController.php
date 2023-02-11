<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CovidController
{
    public function fooldal()
    {
        $europai = DB::select("SELECT * FROM `eu_zonak`");
        $vilagkeres = DB::select("SELECT * FROM `vilagkereskedelem_zonak`");
        return view('welcome',['eu'=>$europai,'vilag'=>$vilagkeres]);
    }
    public function europa(Request $request)
    {
        $valasztott = $request->europa;
        $eredmeny = DB::select("SELECT eu_zonak.zonanev,eu_adatok.datum,eu_adatok.szazalekpont FROM `eu_zonadatok`
                                      INNER JOIN eu_zonak on eu_zonadatok.zonakID = eu_zonak.id
                                      INNER JOIN eu_adatok on eu_zonadatok.adatokID = eu_adatok.id WHERE eu_zonak.id = ? GROUP BY eu_adatok.datum DESC;",[$valasztott]);

        return view("europa",["adatok" =>$eredmeny,"valasztott"=>$valasztott]);
    }
    public function vilag(Request $request)
    {
        $valasztott = $request->vilag;
        $eredmeny = DB::select("SELECT vilagkereskedelem_zonak.zonanev,vilagkereskedelem_adatok.datum,vilagkereskedelem_adatok.szazalekpont FROM `vilagkereskedelem_adatok`
                                INNER JOIN vilagkereskedelem_zonak on vilagkereskedelem_adatok.zonaID = vilagkereskedelem_zonak.id WHERE vilagkereskedelem_zonak.id = ?
                                ORDER BY vilagkereskedelem_adatok.datum DESC",[$valasztott]);

        return view("vilag",["adatok" =>$eredmeny,"valasztott"=>$valasztott]);

    }
}

