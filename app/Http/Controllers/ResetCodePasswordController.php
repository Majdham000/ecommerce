<?php

namespace App\Http\Controllers;

use App\Mail\SendCodeResetPassword;
use Illuminate\Http\Request;
use App\Models\ResetCodePassword;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ResetCodePasswordController extends Controller
{
    public function userForgetPassword(Request $request)
    {
        $data = $request -> validate([
            'email' => 'required|email|exists:users,email',
            'code' => 'unique:reset_code_passwords,code'
        ]);

        //Delete all old code that user send before
        ResetCodePassword::where('email',$request->email)->delete();

        //Generate random code
        $data['code'] = mt_rand(100000,999999);

        //Create a new code
        $code = ResetCodePassword::create($data);

        //Send email to user
        Mail::to($request->email)->send(new SendCodeResetPassword($code->code));

        return response()->json([
            'status' => true ,
            'message' => 'password.sent'
        ]);

    }

    public function userCheckCode(Request $request)
    {
        $request -> validate([
            'code' => 'required|string|exists:reset_code_passwords,code'
        ]);

        $code = ResetCodePassword::firstwhere('code',$request->code);

        //check if it is not expired : the time is one hour
        if ($code->created_at > now()->addHour())
        {
            $code -> delete();
            return response() -> json([
                'status' => false,
                'message' => 'password.code.is.expired'
            ],422);
        }

        return response() -> json([
            'status' => true,
            'code' => $code -> code,
            'message' => 'password.code.is.valid'
        ]);
    }

    public function userResetPassword(Request $request)
    {
        $attributes = $request -> validate([
            'code' => 'required|string|exists:reset_code_passwords,code',
            'password' => 'required|confirmed'
        ]);

        $passwordReset = ResetCodePassword::firstwhere('code',$request->code);

        if($passwordReset->created_at > now()->addHour())
        {
            $passwordReset->delete();
            return response() -> json([
                'status' => false,
                'message' => 'password.code.is.expired'
            ],422);
        }

        $user = User::firstwhere('email',$passwordReset->email);

        $user -> update([
            'password' => $request->password
        ]);

        $passwordReset->delete();

        return response() -> json([
            'status' => true,
            'message' => 'password has been changed'
        ]);
    }
}
