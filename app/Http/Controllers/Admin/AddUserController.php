<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add_users = User::where('role','2')->get();
        return view('admin.add_user.index', compact('add_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add_user = new User();
        $add_user->name = $request->name;
        $add_user->email = $request->email;
        $add_user->password = Hash::make($request->password);
        $add_user->save();
        toast("Record Saved Successfully", "success");
        return redirect('/admin/add_user');
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
        $add_user = AddUser::find($id);
        return view('admin.add_user.edit', compact('add_user'));
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
        $add_user = User::find($id);
        $add_user->name = $request->name;
        $add_user->email = $request->email;
        $add_user->password = Hash::make($request->password);
        $add_user->update();
        toast("Record updated Successfully", "success");
        return redirect('/admin/add_user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_user = User::find($id);
        $add_user->delete();
        toast("Record Deleted Successfully", "danger");
        return redirect('/admin/add_user');
    }
}
