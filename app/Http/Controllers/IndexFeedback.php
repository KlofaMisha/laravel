<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Feedbacks;
use Image;

class IndexFeedback extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedbacks::orderby('created_at', 'desc')->paginate(500); // desc - для виводу на сторінку по даті
        
        return view('admin.feedback.index')->withFeedbacks($feedbacks);
     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


        $feedbacks = new Feedbacks();


            

        $feedbacks->name = $request->name;
    
        $feedbacks->email = $request->email;
         $feedbacks->msg = $request->msg;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $feedbacks->image=$filename;
        }







        $feedbacks->save();

        $request->session()->flash('success', 'Запис опублікована!');

     
        return redirect()->route('feedback.show', $feedbacks->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedbacks = Feedbacks::find($id);


        return view('admin.feedback.show')->withFeedbacks($feedbacks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedbacks = Feedbacks::find($id);


        return view('admin.feedback.edit')->withFeedbacks($feedbacks);
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
        $feedbacks = Feedbacks::find($id);

         $feedbacks->name = $request->name;
    
        $feedbacks->email = $request->email;
         $feedbacks->msg = $request->msg;


       
// основне фото
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $feedbacks->image=$filename;
        }






        $feedbacks->save();

        $request->session()->flash('success', 'Успішно редаговано!');


        return redirect()->route('feedback.show', $feedbacks->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedbacks = Feedbacks::find($id);

        $feedbacks->delete();

       
        return view('admin.feedback.id');
    }













}
