<?php

namespace App\Http\Controllers\Nany;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Profile;
use App\Models\ProfileSkill;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


use function PHPUnit\Framework\isEmpty;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('nany.profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $skills = Skill::all();
        return view('nany.profile.create', compact('skills', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = Auth::user()->name;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->city  = $request->city;
        $user->update();

        $profile = new Profile();
        $profile->age = $request->age;
        $profile->gender = $request->gender;
        $profile->salary = $request->salary;
        $profile->user_id = Auth::user()->id;

        $profile->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $profile->image = 'images/' . $filename;
        }
        if ($request->hasFile('qualification')) {
            $file = $request->file('qualification');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $profile->qualification = 'images/' . $filename;
        }


        $profile->save();
        // return $request->skills;


        foreach ($request->skills as $skill) {
            $profileSkill = new ProfileSkill();
            $profileSkill->profile_id = $profile->id;
            $profileSkill->skill_id = $skill;
            $profileSkill->save();
        }

        toast("Record Saved", "success");
        return redirect("/nany/profile");
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
        $categories = Category::all();

        $profile = Profile::where('id', $id)->first();
        $skills = Skill::all();
        // return $profile->profile_skills;
        return view('nany.profile.edit', compact('skills', 'profile', 'categories'));
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
        $profile = Profile::find($id);
        
        $profile->age = $request->age;
        $profile->gender = $request->gender;
        $profile->salary = $request->salary;
        $profile->user_id = Auth::user()->id;
        if ($request->hasFile('qualification')) {
            $file = $request->file('qualification');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $profile->qualification = 'images/' . $filename;
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $profile->image = 'images/' . $filename;
        }
        $profile->category_id = $request->category_id;

        $profile->update();

        // return $request->skills;
        ProfileSkill::where('profile_id', $profile->id)->delete();
        foreach ($request->skills as $skill) {
            $profileSkill =  new ProfileSkill();
            $profileSkill->profile_id = $profile->id;
            $profileSkill->skill_id = $skill;
            $profileSkill->save();
        }

        toast("Record updated", "success");
        return redirect("/nany/profile");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}