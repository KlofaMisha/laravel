<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Blog;
use Image;

class IndexBlogs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::orderby('created_at', 'desc')->paginate(500); // desc - для виводу на сторінку по даті
        
        return view('admin.blog.index')->withBlog($blog);
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


        $blog = new Blog();


        $url = strtr(mb_strtolower($request->url), " ", "_");

        $bld = Blog::get();
        $www = '0';
        foreach ($bld as $value) {
            if ($value->url==$url) {
               $www = $url.rand(1111, 9999);
             
            } else {

            }
            
        }


        if($www != '0') {
            $blog->url=$www;
        } else {
             $blog->url=$url;
        }
        


// dd($www);



        

        $blog->title = $request->title;
    
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $blog->image=$filename;
        }







        $blog->save();

        $request->session()->flash('success', 'Запис опублікована!');

     
        return redirect()->route('blog.show', $blog->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);


        return view('admin.blog.show')->withBlog($blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);


        return view('admin.blog.edit')->withBlog($blog);
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
        $blog = Blog::find($id);

        $blog->title = $request->title;
  
        $blog->description = $request->description;

       
// основне фото
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $blog->image=$filename;
        }






        $blog->save();

        $request->session()->flash('success', 'Успішно редаговано!');


        return redirect()->route('blog.show', $blog->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

       
        return view('admin.blog.id');
    }













}
