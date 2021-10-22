<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function pageAbout(){
        return view('pages.AboutUs');
    }
     public function pageContact(){
        return view('pages.ContactUS');
    }
     public function pageTeam(){

        $data = [
            'dataOne'=>'fardin',
            'dataTwo'=>'22'
        ];

        return view('pages.OurTeam')->with('data',$data);
    }
     public function pageHome(){
        return view('pages.Home');
    }
   
}
