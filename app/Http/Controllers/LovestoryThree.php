<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Photos;
use Image;

class LovestoryThree extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::orderby('created_at', 'asc')->paginate(5000); // desc - для виводу на сторінку по даті
        
        $url = 'lovestory_three';
        $category = 'lovestory';
        $nav = 3;

        // dd($photos);
        return view('admin.fotos.index')->with(['photos'=>$photos, 'url'=>$url,  'category'=>$category, 'nav'=>$nav ]);
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $url = 'lovestory_three';
         $category = 'lovestory';
         $nav = 3;
         
        return view('admin.fotos.create')->with([ 'url'=>$url, 'category'=>$category, 'nav'=>$nav ]);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


        $photos = new Photos();

        $photos->category_id = 'lovestory';
        $photos->url = 'lovestory_three';

        $photos->title = $request->title;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $photos->image=$filename;
        }








        $photos->save();

        $request->session()->flash('success', 'Запис опублікована!');

     
        return redirect()->route($photos->url.'.show', $photos->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photos = Photos::find($id);

          $category = 'lovestory';
          $nav = 3;

        return view('admin.fotos.show')->with(['photos'=>$photos,  'category'=>$category, 'nav'=>$nav ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photos = Photos::find($id);

        $category = 'lovestory';
        $nav = 3;

        return view('admin.fotos.edit')->with(['photos'=>$photos,  'category'=>$category, 'nav'=>$nav ]);
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
        $photos = Photos::find($id);
        $photos->title = $request->title;
        $photos->inline = $request->inline;
       
//  фото
    if($photos->checkbox =="ok"){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->resize(323, 485)->save($location);
            $photos->image=$filename;
            }
    } else {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $photos->image=$filename;
            }

    }





        $photos->save();

        $request->session()->flash('success', 'Успішно редаговано!');

        $url = 'lovestory_three';
        $category = 'lovestory';
        $nav = 3;

        return redirect()->route($url.'.show', ['photosID'=>$photos->id, 'url'=>$url, 'category'=>$category, 'nav'=>$nav ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photos = Photos::find($id);

        $photos->delete();
        
        $category = 'lovestory';
        $nav = 3;
       
        return view('admin.fotos.id')->with([ 'category'=>$category, 'nav'=>$nav ]);
    }
}
