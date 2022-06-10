<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Treatment;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function mainCategoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index(){
        $sliderData = Treatment::limit(4)->get();
        $treatmentList = Treatment::all()->take(5);
        return view('home.index',[
            'sliderData'=>$sliderData,
            'dataList'=>$treatmentList
        ]);
    }
    public function treatment($tid){
        $treatment = Treatment::find($tid);
        $images = DB::table('images')->where('treatment_id',$tid)->get();
        return view('home.treatment',
            [
                'treatmentData'=>$treatment,
                'imagesData'=>$images
            ]);
    }
    public function categorytreatments($id,$slug){

        $treatment = Treatment::find($id);
        $images = DB::table('images')->where('treatment_id',$id)->get();
        return view('home.treatment',
            [
                'treatmentData'=>$treatment,
                'imagesData'=>$images
            ]);
    }

}
