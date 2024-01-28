<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\SecondController;
use Illuminate\Support\Facades\View;

class FirstController extends Controller
{
    //
    public function index(){
        return view('contact');
    }
    public function about_index(){
        return view('about');
    }
    public function country(){
        return view('country');
    }

    public function StudentStore(Request $request){
        //dd($request->all());
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        //dd($data);
        return redirect()->back()->with('success','Data Inserted Successfully');
        //return redirect()->action([SecondController::class, 'test']);
    }

    public function aboutStore(Request $request){
        dd($request->all());
    }

    public function laravel(){
        //return view('laravel');
        if(View()->exists('page.laravel')){
            return View::make('page.laravel', ['name' => 'Alamin']);
        }
        else{
            return "View not found";
        }
    }
}
