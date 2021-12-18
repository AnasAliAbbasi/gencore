<?php

namespace App\Http\Controllers;

use App\Models\product;
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
        return view('crud')->with('appData', product::all());
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

        $request->validate([

            'title' => 'required',
            'description' =>'required', 
            'price' => 'required'
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');


        $saveItem = new product();

        $saveItem->title = $title;
        $saveItem->description = $description;
        $saveItem->price = $price;

        $saveItem->save();

        $request->session()->flash('inserted' , 'Item Has Been Added');
        return redirect('crud');

        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product , $id)
    {
        return view('update')->with('productData' , product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product , $id)
    {
        

        $request->validate([

            'title' => 'required',
            'description' =>'required', 
            'price' => 'required'
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');


        $saveItem =  product::find($id);

        $saveItem->title = $title;
        $saveItem->description = $description;
        $saveItem->price = $price;

        $saveItem->save();

        $request->session()->flash('updated' , 'Item Has Been updated');
        return redirect('crud');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , product $product , $id)
    {
        product::destroy(array('id' , $id));
        
        $request->session()->flash('deleted' , 'Item Has Been deleted');
        return redirect('crud');
    }
}
