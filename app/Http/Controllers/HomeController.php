<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Hire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == 0) {

            $categories = Category::all();
            $galleries = Gallery::all();
            return view('frontend.pages.index', compact('categories', 'galleries'));
        } else if ($role == 1) {
            return view('nany.profile.index');
        } else if ($role == 2) {
            return view('admin.dashboard');
        } else {
            return redirect('/');
        }
        // return view('home');
        //
    }
}