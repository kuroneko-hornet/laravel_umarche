<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //初めて作るcomponent
    public function showComponent1(){
        return view('tests.component-test1');
    } 

    public function showComponent2(){
        return view('tests.component-test2');
    }
}
