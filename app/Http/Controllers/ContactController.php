<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_store(Request $request){
        $request->validate([
            'fname'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'message'=>'required',
        ]);

        $contact = Contact::create([
            'fname'=>$request->fname,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'message'=>$request->message,
        ]);
        

        return redirect('contact')->with('status','Data Succcessfully sent');
    }

    public function admin_login (Request $request){
        $request->validate([
            'username'=>'required',
            'password'=> 'required',
        ]);

        $credentials = $request->only('username','password');

        if($credentials['username']==='admin' && $credentials['password']==='admin'){
            return redirect('admin_dashboard')->with('status','welcome '.$credentials['username'].'');
        }else{
            return redirect()->back()->with('err','Invalid Credentials');
        }


    }

}
