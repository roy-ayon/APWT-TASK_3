<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertable;

class RegistrationCheck extends Controller
{
    //
    public function registration(){
        return view('pages.registration');
    }
    
    public function registrationCheck(Request $request){
        $this->validate(
            $request,
            [
                'userid'=>'required|string',
                'useremail'=>'required|email',
                'userpassword'=>'required',
                'usertype'=>'required'
            ]
        ); 

        
        $user = new Usertable();
        $user->user_id = $request->userid;
        $user->user_email = $request->useremail;
        $user->user_password = $request->userpassword;
        $user->user_type = $request->usertype;
        $user->save();


        return "ok";
    }
}
