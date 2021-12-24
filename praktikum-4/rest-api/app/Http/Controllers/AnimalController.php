<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ["ayam", "kucing"];

    
    public function index(){
        foreach($this->animals as $animal){
            echo "$animal <br>";
        }
    }
    
    public function store(Request $request){
        array_push($this->animals, $request->nama);
        $this->index();
    }

    public function update(Request $requestm, $id){
        echo "mengupdate data animals id:$id";
    }

    public function destroy(Request $request, $id){
        echo "menghapus data animals id:$id";
    }
}
