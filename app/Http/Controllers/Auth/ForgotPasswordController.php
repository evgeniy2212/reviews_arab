<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $user_check = User::where('email', $request->email)->first();

        if (!$user_check || !$user_check->email_verified_at) {
            return back()->with('status', 'حسابك غير مفعل. يرجى تفعيله أولا.');
        } else {
            $response = $this->broker()->sendResetLink(
                $request->only('email')
            );

            if ($response === Password::RESET_LINK_SENT) {
                return redirect(route('home'))->withSuccess(['تم إرسال ارتباط تأكيد إلى عنوان بريدك الإلكتروني.']);
            }

            return back()->withErrors(
                ['email' => trans($response)]
            );
        }
    }
}
