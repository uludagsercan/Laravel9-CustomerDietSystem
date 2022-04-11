<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view("admin.product.index",[
            'data'=> $products
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

        return view("admin.product.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
                $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('detail')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('minquantity')->nullable();
            $table->integer('taxt')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(false);
    */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->minquantity = $request->minquantity;
        $product->taxt = $request->taxt;
        $product->image=$request->image;
        $product->status = (boolean)$request->status;
        $product->save();
        return redirect("admin/product");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        //
        $product = Product::find($id);
        return view('admin.product.show',[
            'data'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        //
        $product = Product::find($id);
        return view('admin.product.edit',[
            'data'=> $product
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->minquantity = $request->minquantity;
        $product->taxt = $request->taxt;
        $product->image=$request->image;
        $product->status = $request->status;
        $product->save();
        return redirect("admin/product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product');
    }
}
