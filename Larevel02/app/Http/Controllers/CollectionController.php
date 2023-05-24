<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu(){
        // $collection = collect([1,9,3,4,5,3,5,7]);
        // echo "<pre>";
        // var_dump($collection);
        // echo "</pre>";

        $collection = collect([1,9,3,4,5,3]);
        dump($collection);
    }
    public function collectionDua(){
        // $collection = collect([1,4,2,3,4,5]);
        // $collection[0]; echo "<br>";
        // $collection[2]; echo "<br>";

        // foreach($collection as $value){
        //     echo "$value";
        //}

        $collection = collect(["Belajar","Laravel",1,2]);
        echo $collection;
        echo "<br>";
    }
    public function collectionTiga(){

    }
    public function collectioEmpat(){

    }
    public function collectioLima(){

    }
    public function collectioEnam(){
        
    }
}
