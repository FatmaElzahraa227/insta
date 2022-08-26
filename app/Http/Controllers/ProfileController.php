<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        $user = Auth::user();
        $input['user_id'] = $user->id;
        return view('profile.index')->with('profiles', $profile);
    }
    public function create()
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $profile = Profile::where('user_id', $user_id)->get();

            if ($profile->count() > 0) {

                return redirect()->route('profile.show', $profile->first()->id);
            }
            else {
                return view('profile.create');
            }
        }

    }
    public function store(Request $request)
    {

        $input = $request->all();


        if ($request->file('image') != null) {
            $path = $request->file('image')->store('public/images');
            $input['image'] = basename($path);
        }

        $user = Auth::user();
        $input['user_id'] = $user->id;
        Profile::create($input);

        return view('profile.show')->with([
            'profile' => $user->profile,
            'user' => $user
        ]);
    }

    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profile.show')->with(['profile' => $profile]);
    }

   
}
