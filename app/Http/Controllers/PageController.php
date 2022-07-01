<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $galleries = Gallery::all();
        return view('frontend.pages.index', compact('categories', 'galleries'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function category()
    {
        $categories = Category::all();
        return view('frontend.pages.category.category', compact('categories'));
    }

    public function category_show($id)
    {
        // $nany = Profile::where('category_id', $id)->get();
       
        $nany = Profile::where('category_id',$id)->get(); // Note Replace Profile with Application later
        // $nany = User::where('role', 1)->get();
    //    foreach($nany as $item){
    //        return $item->user->profiles[0];
    //    }
    
    // return $nany;
        return view('frontend.pages.Category.show', compact('nany'));
    }


    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('frontend.pages.gallery', compact('galleries'));
    }

    public function nany()
    {
        $nany = User::where('role', 1)->get();
        return view('frontend.pages.nany', compact('nany'));
    }

    public function nanyRegisterForm()
    {
        return view('frontend.pages.register_as_nany');
    }
    public function registerNany(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 1;
        $user->save();
        toast("Account created successfully", "success");
        return redirect("/login");
    }
// Feedback Feature
    public function feedback(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->lastname = $request->lastname;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->message = $request->message;
        $feedback->save();
        toast('Thank you for you feedback', 'success');
        return redirect('/');
    }
// Search Feature
    public function search(Request $request)
    {
        $nannies = Profile::whereHas('skills',function($query) use ($request){
            $query->where('name','LIKE','%'.$request->skill.'%');
        })->with(['user','skills'])->get();


        return view('frontend.pages.search',compact('nannies'));
    }
}
