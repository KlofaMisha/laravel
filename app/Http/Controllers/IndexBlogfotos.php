<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Blogfoto;
use Image;

class IndexBlogfotos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogfoto = Blogfoto::orderby('created_at', 'desc')->paginate(500); // desc - для виводу на сторінку по даті
        // dd($photo);
        return view('admin.blogfoto.index')->withBlogfoto($blogfoto);
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogfoto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


        $blogfoto = new Blogfoto();



        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $blogfoto->image=$filename;
        }








        $blogfoto->save();

        $request->session()->flash('success', 'Запис опублікована!');

     
        return redirect()->route('blog_fotos.show', $blogfoto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogfoto = Blogfoto::find($id);


        return view('admin.blogfoto.show')->withBlogfoto($blogfoto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogfoto = Blogfoto::find($id);


        return view('admin.blogfoto.edit')->withBlogfoto($blogfoto);
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
        $blogfoto = Blogfoto::find($id);

       
// основне фото
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $blogfoto->image=$filename;
        }





        $blogfoto->save();

        $request->session()->flash('success', 'Успішно редаговано!');


        return redirect()->route('blog_fotos.show', $blogfoto->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogfoto = Blogfoto::find($id);

        $blogfoto->delete();

       
        return view('admin.blogfoto.id');
    }
}
