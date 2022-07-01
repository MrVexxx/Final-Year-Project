<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nannys = WishList::where('user_id', Auth::user()->id)->get();
        // foreach($nannys as $nanny){
        //     return $nanny->profile->user->name;

        // }
        // return $nannys;
        return view('frontend.pages.wishlist.wishlist', compact('nannys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  Add to fav feature
    public function store(Request $request)
    {
        $wishlist = new WishList();
        $wishlist->user_id = Auth::user()->id;
        $wishlist->profile_id = $request->profile_id;
        $wishlist->save();
        toast("Added to wishlist successfully", 'succecss');
        return redirect("/category");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist = WishList::find($id);
        $wishlist->delete();
        toast("Removed from wishlist", "success");
        return redirect("/wishlist");
    }
}
