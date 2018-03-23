<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Price;


class IndexPrices extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price = Price::orderby('created_at', 'asc')->paginate(22); // desc - для виводу на сторінку по даті
        
        return view('admin.price.index')->withPrice($price);
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.price.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
            


        $price = new Price();

        $price->title = $request->title;
        $price->price = $request->price;
        $price->description = $request->description;
       



        $price->save();

        $request->session()->flash('success', 'Запис опублікована!');

     
        return redirect()->route('price.show', $price->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $price = Price::find($id);


        return view('admin.price.show')->withPrice($price);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::find($id);


        return view('admin.price.edit')->withPrice($price);
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
        $price = Price::find($id);

        $price->title = $request->title;
        $price->price = $request->price;
        $price->description = $request->description;

       



        $price->save();

        $request->session()->flash('success', 'Успішно редаговано!');


        return redirect()->route('price.show', $price->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::find($id);

        $price->delete();

       
        return view('admin.price.id');
    }
}
