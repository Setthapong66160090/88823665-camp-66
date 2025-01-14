<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class MyController extends Controller
{
    private function myprivate () {
        return 1;
    }
    function myFunction (Request $req, $var1 = ""){
        $data['myinput'] = $req->input('myinput');
        $data['myvalue'] = $var1;
        return view('myview', $data);
    }

    function showTable(Request $req) {
        $data['multitable'] = [];
        $var = $req->input('inputNumber');
        if (!empty($var)) {
            for ($i = 1; $i <= 12; $i++) {
                $data['multitable'][] = "$var x $i = " . ($var * $i);
            }
        }
        return view('myview', $data); 
    }


}
