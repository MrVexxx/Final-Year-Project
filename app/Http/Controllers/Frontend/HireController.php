<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hire;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;


class HireController extends Controller
{

    public function add($id)
    {
        if (!Auth::user()) {
            return redirect("/login");
        }
        $profile = Profile::findOrFail($id);
        return view('frontend.pages.nany.hire', compact('profile'));
    }
    public function hire(Request $request, $id)
    {

        $request->validate([

            'month' => 'integer|min:1|max:12',
            'name' => 'required',
            'address' => 'required',
            'mobile_no' => 'required',
            'date' => 'required',


        ]);
        $hire = new Hire();
        $hire->profile_id = $id;
        $hire->month = $request->month;
        $hire->name = $request->name;
        $hire->address = $request->address;
        $hire->mobile_no = $request->mobile_no;
        $hire->date = $request->date;
        $hire->description = $request->description;
        $hire->user_id = Auth::user()->id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $hire->image = 'images/' . $filename;
        }

        $hire->save();
        $response = Http::post('http://sms.codeitapps.com/api/v3/sms?',[
            'token' => 's3Xs93M1KgsjARbH1611QG8zKSitQjY4k7gz',
            'to' => '9819082777',
            'sender' => 'Demo',
            'message' => "Dear admin you have hire request from Name: $request->name for Date: $request->date "
        ]);
        toast("Your application has been sent, We will call you shortly", "success");
        return redirect()->back();
    }
}
