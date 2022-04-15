<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

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
        return view('admin.treatment.index',[
           'data'=>$treatments
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
        return view('admin.treatment.create');
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
        $treatment->keywords = $request->keyword;
        $treatment->detail = $request->detail;
        $treatment->image = $request->fimage;
        $treatment->price = $request->price;
        $treatment->category_id = 2;
        $treatment->user_id=0;
        $treatment->status = (boolean)$request->status;
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

        return view('admin.treatment.show',[
            'data'=> $treatment
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
        return view('admin.treatment.edit',[
            'data'=> $treatment
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
        $treatment->keywords = $request->keyword;
        $treatment->detail = $request->detail;
        $treatment->image = $request->fimage;

        $treatment->category_id = 2;
        $treatment->user_id=0;
        $treatment->status = (boolean)$request->status;
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
        Treatment::destroy($id);

        return redirect('admin/treatment');

    }
}
