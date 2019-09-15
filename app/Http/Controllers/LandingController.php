<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Probs;

class LandingController extends Controller
{
    public function landing()
    {
        return view('probs');
    }
    public function insertProbs(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $name = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }

        $probs = new Probs();
        $probs->age = $request->age;
        $probs->email = $request->email;
        $probs->name = $request->email;
        $probs->desc = $request->desc;
        $probs->image = $name;
        $probs->save();

        return redirect()->back()->with('message','success');
    }
}
