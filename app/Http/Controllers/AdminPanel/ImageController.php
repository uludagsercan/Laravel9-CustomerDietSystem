<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tid)
    {
        //
        $treatment = Treatment::find($tid);
        $images = DB::table('images')->where('treatment_id',$tid)->get();

        return view('admin.image.index',[
            'datalist'=>$images,
            'treatmentData'=>$treatment
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$tid)
    {
        $imageGalley = new Image();
        $imageGalley->title = $request->title;
        if ($request->file('fimage')){
            $imageGalley->image = $request->file('fimage')->store('images');
        }
        $imageGalley->treatment_id = $tid;
        $imageGalley->save();
        return redirect()->route('admin.image.index',['tid'=>$tid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tid,$id)
    {
        //
        $treatment = Treatment::find($tid);
        $treatments = Treatment::all();
        $image = Image::find($id);
        return view('admin.image.edit',[
            'treatmentData'=>$treatment,
            'imageData'=>$image,
            'treatmentsData'=>$treatments
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$tid, $id)
    {
        //
        $imageGalley = Image::find($id);
        $imageGalley->title = $request->title;
        if ($request->file('fimage')){
            $imageGalley->image = $request->file('fimage')->store('images');
        }
        $imageGalley->treatment_id = $request->treatment_id;
        $imageGalley->save();
        return redirect()->route('admin.image.index',['tid'=>$tid]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tid,$id)
    {
        //

        $image = Image::find($id);
        if ($image->image && Storage::disk('public')->exists($image->image)){
            Storage::delete($image->image);
        }

        $image->delete();
        return redirect()->route('admin.image.index',['tid'=>$tid]);

    }
}
