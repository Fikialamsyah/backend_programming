<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ["ayam", "kucing"];


    function index(){
        foreach($this->animals as $animal){
            echo "$animal <br>";
        }
    }
    
    function store(Request $request){
        array_push($this->animals, $request->nama);
        $this->index();
    }

    function update(Request $requestm, $id){
        echo "mengupdate data animals id:$id";
    }

    function destroy(Request $request, $id){
        echo "menghapus data animals id:$id";
    }
}
