<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Treatment;
use App\Models\Image;
use http\Message;
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
        $setting = Setting::first();
        return view('home.index',[
            'sliderData'=>$sliderData,
            'dataList'=>$treatmentList,
            'setting'=>$setting
        ]);
    }
    public function about(){
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function references(){
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function faq(){
        $setting = Setting::first();
        $faqData = Faq::all();
        return view('home.faq',
            [
                'setting'=>$setting,
                'dataList'=>$faqData
            ]);
    }
    public function messageStore(Request $request){
        $message = new \App\Models\Message();
        $message->name = $request->name;

        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->subject = $request->subject;
        $message->ip = request()->ip();
        $message->email = $request->email;
        $message->save();
        return redirect()->route('contact')->with('info','Your message has been sent, Thank You');
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


        $category = Treatment::find($id);
        $treatments = DB::table('treatments')->where('category_id',$id)->get();

        return view('home.categorytreatments',
            [
                'treatmentData'=>$treatments,
                'category'=>$category
            ]);
    }

}
