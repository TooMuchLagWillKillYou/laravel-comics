<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function homepage(){

        require_once 'comics.php';

        return view('pages.home', compact('data'));
    }

    public function singlepage($index){

        require_once 'comics.php';

        $item = $data[$index];

        return view('pages.single', compact('item'));
    }
}
