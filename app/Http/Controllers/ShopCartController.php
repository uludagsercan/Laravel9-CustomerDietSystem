<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopCartController extends Controller
{
    public static function countshopcart(){
        return ShopCart::where('user_id',Auth::id())->count();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shopcart = ShopCart::where('user_id',Auth::id())->get();
        return view('home.user.shopcart',['data'=>$shopcart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data = new ShopCart();
        $businessRule = ShopCart::where('treatment_id',$request->treatment_id)->where('user_id',Auth::id())->first();
        if ($businessRule){
            return redirect()->back()->with('error','Your product is available, Please choose another product');
        }
        $data->treatment_id = $request->treatment_id;
        $data->user_id = Auth::id();
        $data->save();
        return redirect()->back()->with('success','Your product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $shopcart = ShopCart::find($id);
        $shopcart->delete();
        return redirect()->route('shopcart.index');
    }
}
