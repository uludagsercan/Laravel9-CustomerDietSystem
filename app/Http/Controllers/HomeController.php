<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderData = Treatment::all()->take(4);
        $treatmentList = Treatment::all()->take(5);
        return view('home.index',[
            'sliderData'=>$sliderData,
            'dataList'=>$treatmentList
        ]);
    }
}
