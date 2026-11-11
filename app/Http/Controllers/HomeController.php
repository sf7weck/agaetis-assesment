<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    

    public function add(Request $request){
        $data = $request->all();

    }

    public function edit(Request $request){
        $data = $request->all();
    }

    public function delete(Request $request){
        $data = $request->all();
    }
}
