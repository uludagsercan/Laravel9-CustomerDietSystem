<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $treatments = Treatment::all();
        $categories = Category::all();
        return view('admin.treatment.index',[
           'data'=>$treatments,
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Category::all();
        return view('admin.treatment.create',[
            'data'=>$data
        ]);
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
        $treatment = new Treatment();
        $treatment->title = $request->title;
        $treatment->description = $request->description;
        $treatment->keywords = $request->keywords;
        $treatment->detail = $request->detail;
        $treatment->quantity = $request->quantity;
        $treatment->minquantity = $request->minquantity;
        if($request->file('fimage')){
            $treatment->image = $request->file('fimage')->store('images');
        }
        $treatment->price = $request->price;

        $treatment->category_id = $request->category_id;
        $treatment->user_id=0;
        $treatment->status = (boolean)$request->status;
        $treatment->discount = $request->discount;
        $treatment->tax = $request->tax;
        $treatment->save();
        return redirect('admin/treatment');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment,$id)
    {
        //
        $treatment = Treatment::find($id);
        $dataList = Category::all();
        return view('admin.treatment.show',[
            'data'=> $treatment,
            'dataList'=>$dataList
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment,$id)
    {
        //
        $treatment = Treatment::find($id);
        $categories = Category::all();
        return view('admin.treatment.edit',[
            'data'=> $treatment,
            'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment,$id)
    {
        //
        $treatment= Treatment::find($id);
        $treatment->title = $request->title;
        $treatment->description = $request->description;
        $treatment->keywords = $request->keywords;
        $treatment->detail = $request->detail;
        if($request->file('fimage')){
            $treatment->image = $request->file('fimage')->store('images');
        }
        $treatment->quantity = $request->quantity;
        $treatment->minquantity = $request->minquantity;
        $treatment->category_id = $request->category_id;
        $treatment->user_id=0;
        $treatment->status = (boolean)$request->status;
        $treatment->discount = $request->discount;
        $treatment->tax = $request->tax;
        $treatment->save();
        return redirect('admin/treatment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment,$id)
    {
        //
        $treatment = Treatment::find($id);
        if ($treatment->image && Storage::disk('public')->exists($treatment->image)){
            Storage::delete($treatment->image);
        }

        $treatment->delete();
        return redirect('admin/treatment');
    }
}
