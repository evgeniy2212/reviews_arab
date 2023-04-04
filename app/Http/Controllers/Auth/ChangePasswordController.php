<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->withErrors(["كلمة المرور الحالية لا تتطابق مع كلمة المرور التي قدمتها. حاول مرة اخرى."]);
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->withErrors(["لا يمكن أن تكون كلمة المرور الجديدة هي نفسها كلمة مرورك الحالية. الرجاء اختيار كلمة مرور مختلفة."]);
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

//        return redirect()->back()->with("status","Password changed successfully !");
        return redirect()->route('profile-info')->with('status','تم تغيير الرقم السري بنجاح!');
    }
}
