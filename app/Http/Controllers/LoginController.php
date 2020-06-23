<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;

class LoginController extends Controller
{
  public function loginview(Request $request)
  {



    return view('login');

  }
  public function loginemail(Request $request)
  {

     $email =$request->request->get('email');
     $pass =$request->request->get('password');
     if (Auth::attempt(['email' => $email, 'password' => $pass]))
     {
          return redirect()->to('/home');
     }

    return redirect()->to('/login');

  }
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

        } catch (\Exception $e) {
            return redirect('/login');
            // login with errormessage
            // or if has auth error from google
            // or register depending on url signup flag
        }
        $existingUser = User::where('email', $user->email)->first();
        if(!($existingUser)){
            // email not registered
            return redirect()->to('/signup');
        }else{
            return redirect()->to('/dashboard');
        }
    }

    public function authenticate() {
    // Use this function if you need to set cookies for login expire or if you need to update login time after google auth success
     if (Auth::attempt(['email' => $email, 'password' => $password])) {

        // Authentication passed...
        return redirect()->intended('dashboard');
     }
  }
}
