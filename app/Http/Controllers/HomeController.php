<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\ShopCart;
use App\Models\Treatment;
use App\Models\Image;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $shopCartItem = ShopCart::where('user_id',Auth::id())->get();
        return view('home.index',[
            'sliderData'=>$sliderData,
            'dataList'=>$treatmentList,
            'setting'=>$setting,
            'shopCartItem'=>$shopCartItem
        ]);
    }
    public function about(){
        $setting = Setting::first();
        $shopCartItem = ShopCart::where('user_id',Auth::id())->get();
        return view('home.about',['setting'=>$setting,'shopCartItem'=>$shopCartItem]);
    }
    public function references(){
        $setting = Setting::first();
        $shopCartItem = ShopCart::where('user_id',Auth::id())->get();
        return view('home.references',['setting'=>$setting,'shopCartItem'=>$shopCartItem]);
    }
    public function contact(){
        $setting = Setting::first();
        $shopCartItem = ShopCart::where('user_id',Auth::id())->get();
        return view('home.contact',['setting'=>$setting,'shopCartItem'=>$shopCartItem]);
    }
    public function faq(){
        $setting = Setting::first();
        $faqData = Faq::all();
        $shopCartItem = ShopCart::where('user_id',Auth::id())->get();
        return view('home.faq',
            [
                'setting'=>$setting,
                'dataList'=>$faqData,
                'shopCartItem'=>$shopCartItem
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

    public function storecomment(Request $request,$tid){
        $comment = new Comment();
        $comment->subject=$request->subject;
        $comment->review = $request->review;
        $comment->IP = request()->ip();
        $comment->treatment_id = $tid;
        $comment->user_id=Auth::id();
        $comment->rate=$request->rate;
        $comment->save();
        return redirect()->route('treatment',['tid'=>$tid])->with('info','Your message has been sent, Thank You');
    }
    public function treatment($tid){
        $treatment = Treatment::find($tid);
        $shopCartItem = ShopCart::where('user_id',Auth::id())->get();
        $images = DB::table('images')->where('treatment_id',$tid)->get();
        $reviews = Comment::where('treatment_id',$tid)->get();
        return view('home.treatment',
            [
                'treatmentData'=>$treatment,
                'imagesData'=>$images,
                'reviews'=>$reviews,
                'shopCartItem'=>$shopCartItem
            ]);
    }
    public function categorytreatments($id,$slug){

        $shopCartItem = ShopCart::where('user_id',Auth::id())->get();
        $category = Treatment::find($id);
        $treatments = DB::table('treatments')->where('category_id',$id)->get();

        return view('home.categorytreatments',
            [
                'treatmentData'=>$treatments,
                'category'=>$category,
                'shopCartItem'=>$shopCartItem
            ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
