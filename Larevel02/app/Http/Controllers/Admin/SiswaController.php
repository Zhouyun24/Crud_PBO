<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function cobaFacade(){
        echo \Illuminate\Support\str::snake("SedangBelajarLaravel");
        echo "<br>";
        echo \Illuminate\Support\str::kebab("SedangBelajarLaravel");
    }
    
}
