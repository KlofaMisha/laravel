<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;
use App\Photos;
use App\Price;
use App\Blog;
use App\Feedbacks;
use Image;

class IndexController extends Controller
{
    //
    public function Index () {
    	
      
        $photos = Photos::get();
        $price = Price::get();
        $blog = Blog::orderby('created_at', 'desc')->get();
    


        $navactiv = 7;
        $modal = '';
        $i=0;
    	return view('index')->with(['navactiv'=>$navactiv, 'photos'=>$photos, 'price'=>$price, 'blog'=>$blog, 'i'=>$i  ]);
    }


     public function Gallery () {
        
      
        $photos = Photos::get();


        $navactiv = 0;
        $modal = '';
        return view('gallery')->with(['navactiv'=>$navactiv, 'photos'=>$photos ]);
    }





    public function About () {

      
        $navactiv = 1;
    	return view('about')->with(['navactiv'=>$navactiv ]);
    }





     public function Aboutme (Request $request) {

        

        $feedback = new Feedbacks();
      

         $feedback->name = $request->name;
         $feedback->email = $request->email;
         $feedback->msg = $request->msg;

         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->save($location);
            $feedback->image=$filename;
        }



        $feedback->save();
      

   

        return redirect()->route('stage');
    }
    
    



     public function Stage () {
        $feedback =  Feedbacks::orderby('created_at', 'desc')->paginate(10);
        $navactiv = 2;
    	return view('stage')->with(['navactiv'=>$navactiv, 'feedback'=>$feedback ]);
    }



    public function Price () {
        $price = Price::get();
        $navactiv = 3;
    	return view('price')->with(['navactiv'=>$navactiv, 'price'=>$price ]);
    }



    public function priceDW (Request $request) {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $date = $request->date;
        $sel = $request->sel;
        $msg = $request->msg;
        $cert = $request->cert;
        $id = $request->id;



        Mail::to('vaniashumyk@gmail.com')->send(new UserMail($name, $email, $phone, $date, $sel, $msg, $cert, $id));


    // dd($msg);

        $navactiv = 0;
       
         $request->session()->flash('modal', 'display: block;');
        return redirect()->route('price');



    }








     public function Certificate () {
        

        $navactiv = 4;
    	return view('certificate')->with(['navactiv'=>$navactiv]);
    }



     public function Blog () {
        $blog = Blog::orderby('created_at', 'desc')->get();

        $navactiv = 5;
        $i=0;
    	return view('blog')->with(['navactiv'=>$navactiv, 'blog'=>$blog, 'i'=>$i  ]);
    }



 public function Blogid ($url) {
        
    $blg = Blog::get();
    foreach ($blg as $value) {
        if ($value->url==$url) {
           $id = $value->id;
        }
    }
        $blog = Blog::find($id);

        $navactiv = 5;
        // dd($blog);
       
        return view('blogid')->with(['navactiv'=>$navactiv, 'blog'=>$blog ]);
    }







     public function Feedback () {
        
        $navactiv = 6;
        return view('feedback')->with(['navactiv'=>$navactiv ]);
    }




 public function Photosesia ($urls) {
        
    
        $photos = Photos::orderby('created_at', 'asc')->paginate(5000);
        $i=0;
        $n=0;

        $navactiv = 0;

       
        return view('photosesia')->with(['navactiv'=>$navactiv, 'photos'=>$photos, 'urls'=>$urls, 'i'=>$i, 'n'=>$n ]);
    }


    public function send_mail (Request $request) {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $date = $request->date;
        $sel = $request->sel;
        $msg = $request->msg;
        $cert = $request->cert;
        $id = $request->id;



        Mail::to('vaniashumyk@gmail.com')->send(new UserMail($name, $email, $phone, $date, $sel, $msg, $cert, $id));


    // dd($msg);

        $navactiv = 0;
       
    $request->session()->flash('modal', 'display: block;');
        return redirect()->route('main');



    }





}
