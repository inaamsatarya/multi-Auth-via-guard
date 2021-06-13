<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testPage() {
        //Without viwe
        //echo "Welcome to test page..";

        //with view
        $data['names']=['Inam','Satarya'];
        return view('test', $data);
    }
}
