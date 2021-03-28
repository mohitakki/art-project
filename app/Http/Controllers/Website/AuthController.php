<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function index ()
{
    return view('website.login');
}


    function login (Request $request)
{
    $email = $request->post('email');
    $password = $request->post('password');

    $result = User::where(['email'=>$email, 'password'=>$password])->get();
    if(isset($result['0']->id)) {
        $request->session()->put('USER_LOGIN',true);
        // $request->session()->put('USER_ID',$request['0']->id);
        return redirect('/');

    } else {
        $request->session()->flash('error', 'Please enter valid detail');
        return redirect('auth');
    }

}

    // ------------------- [ User logout function ] ----------------------
 function register(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        $request->session()->flash('message', 'You have registered successfully. You can login now');
        return redirect()->to('/auth');
    }

    // ------------------- [ User logout function ] ----------------------
public function logout(Request $request ) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('auth');
    }


   


}
