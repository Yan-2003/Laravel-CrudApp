<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // this will display all the people on the database
    public function index(){

        $result = DB::select('select * from data_user');
        return view('home', ['user' => $result]);
    }


    public function showPeople($id){
        $result = DB::select('select * from data_user'); 

        foreach($result as $key => $value){
            if($value->id == $id){
                return view('user', ['user' => $value]);
            }
        }

    }
    


    public function updatePeople($id){
        $result = DB::select('select * from data_user'); 

        foreach($result as $key => $value){
            if($value->id == $id){
                return view('update', ['value' => $value]);
            }
        }
    }
}
