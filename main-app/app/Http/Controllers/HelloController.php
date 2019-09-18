<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return View
     */
    public function hello()
    {
        return 'hello';
        // return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
