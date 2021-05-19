<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie{

    public $title;
    public $desc;

    public function __construct($title, $desc = null) {

        $this -> title = $title;

        if ($desc == null){

            $this -> desc = 'Missing film description';
        }else{

            $this -> desc = $desc;
        }
    }

    public function get_string() {

        return 'Title: ' . $this -> title . "\n" . 'Description: ' . $this -> desc; 
    }
}

class MyController extends Controller
{
    public function home() {

        $matrix = new Movie('matrix', 'First film of the Matrix trilogy');
        $matrixStr = $matrix -> get_string();


        $matrix2 = new Movie('matrix 2');
        $matrix2Str = $matrix2 -> get_string();

        dd($matrixStr, $matrix2Str);
    }
}
