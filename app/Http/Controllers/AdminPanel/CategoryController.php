<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    protected $appends=[
      'getParentsTree'
    ];

    public static function getParentsTree($category, $title){

        if ($category->parent_id==0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title.'>'.$title;
        return CategoryController::getParentsTree($parent,$title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.category.index',[
            "data"=>$categories
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
        $categories = Category::all();

        return view('admin.category.create',[
            'data'=>$categories
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
        $category = new Category();
        $category->parent_id = $request->parent_id;
        $category->title=$request->title;
        $category->description = $request->description;
        if ($request->file('fimage')){
            $category->image = $request->file('fimage')->store('images');
        }
        $category->keywords = $request->keywords;
        $category->status = (boolean)$request->status;
        $category->save();
        return redirect('admin/category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
    {
        //
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.category.show',[
            'data'=>$category,
            'datalist'=>$categories
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        //
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.category.edit',[
           "data"=>$category,
            "dataList"=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        //
        $category = Category::find($id);
        $category->parent_id = $request->parent_id;
        $category->title=$request->title;
        $category->description = $request->description;
        if ($request->file('fimage')){
            $category->image = $request->file('fimage')->store('images');
        }
        $category->keywords = $request->keywords;
        $category->status = (boolean)$request->status;
        $category->save();
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        //
        $category = Category::find($id);
        Storage::delete($category->image);
        $category->delete();
        return redirect('admin/category');
    }
}
