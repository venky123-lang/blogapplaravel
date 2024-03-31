<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogsController extends Controller
{
    public function blogs_store(Request $request){
        $request->validate([
            'blog_heading'=>'required',
            'blog_image'=>'required',
            'blog_sub_heading'=>'required',
        ]);

        if($request->hasFile('blog_image')){
            $file=$request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path='uploads/';
            $file->move($path, $filename);
        }

        Blogs::create([
            'blog_heading'=>$request->blog_heading,
            'blog_image'=>$path.$filename,
            'blog_sub_heading'=>$request->blog_sub_heading,
        ]);

        return redirect('add_blogs')->with('status','New Blog Successfully Added');
    }

    public function getBlogs(){
        $blogs=Blogs::orderBy('created_at','desc')->get();
        return view('components.index',compact('blogs'));
    }
    public function getBlogs1(){
        $blogs1=Blogs::orderBy('created_at','desc')->get();
        return view('components.admin_home',compact('blogs1'));
    }

    public function blog_delete(int $id){
        $blogs = Blogs::findOrFail($id);
        $blogs->delete();
        return redirect()->back()->with('status',"Blog Deleted Successfully");
    }

    public function edit_blog(int $id){
        $blog = Blogs::findOrFail($id);
        return view('components.blog_update',compact('blog'));
    }

    public function update_blogs(Request $request, int $id){

        $request->validate([
            'blog_heading'=>'required',
            'blog_image'=>'required',
            'blog_sub_heading'=>'required',
        ]);


        $blog = Blogs::findOrFail($id);

        if($request->hasFile('blog_image')){
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path='uploads/';
            $file->move($path,$filename);

            if(File::exists($blog->image)){
                File::delete($blog->image);
                
            }
        }

        $blog->update([
            'blog_heading'=>$request->blog_heading,
            'blog_image'=>$path.$filename,
            'blog_sub_heading'=>$request->blog_sub_heading,


        ]);

        return redirect('admin_dashboard')->with('status','Blog Updated Successfully');

    }

    public function get_contacts(){
        $new = Contact::orderBy('id','desc')->get();
        return view('components.contact_requests',compact('new'));
    }
    
    public function logout(){
        Auth::logout();
        return redirect('admin')->with('status','You have successfully Logged out');
    }
}
