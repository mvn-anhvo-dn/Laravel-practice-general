<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    public function add($a, $b){
        return $a + $b;
    }

    public function minus($a, $b){
        return $a - $b;
    }
}
