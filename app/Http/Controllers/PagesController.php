<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; //capital letter


class PagesController extends Controller
{
    public function getHome()
    {
        return view('pages.home');
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getVideos()
    {
        return view('pages.videos');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getSponsors()
    {
        return view('pages.sponsors');
    }

    public function getSignIn()
    {
        return view('pages.signin');
    }

    public function getSignOut()
    {
        return view('pages.signout');
    }

    public function getSignUp()
    {
        return view('pages.signUp');
    }

    public function requestSignUp(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required',
            'password2'=>'required | same:password',
        ]);

        if ($validator->fails())
            $request->session()->put('email',$request->email);
            $request->session()->put('password',$request->password);
            $request->session()->put('password2',$request->password2);

           return redirect('/signin');
    }

    public function requestSignIn(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'email' => 'required | email',
            'password' => 'required',
            'password2'=>'required | same:password',
            ]);
        $email = $r->session()->get('email');
        $pass = $r->session()->get('password');
        $pass2 = $r->session()->get('password2');
        if(($email == $r->email) && ($pass == $r->password) && ($pass2 == $r->password2)){

            return redirect('/');

        }else{
            return redirect()->back()->WithErrors($validator->errors()->all());
        }

    }
}
