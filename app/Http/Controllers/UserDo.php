<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\OTP;

class UserDo extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //Regist Session
    public function regist() {
        return view("regist");
    }

    public function checking(request $req){
        $var = session('OTP');
        if ($var->OTP != $req->OTP) {
            return redirect('/inputotp')->withErrors(['OTP' => 'OTP does not match !']);
        } else {
            session(['otp'=>null]);
            return redirect('/login');
        }
    }
    //Login Session
    public function login(){
        $var=session('account');
        if($var == null){
            return view("login");
        }
        return redirect('/');
    }

    public function signin(request $req) {
        $account = Account::where("Email", $req->Email)->where("Password",sha1($req->Password))->first();
        if ($account == null){
            $account = Account::where("Username", $req->Email)->where("Password",sha1($req->Password))->first();
        }
        if(!empty($account)){
            if ($account->Email == "admin@gmail.com" || $account->Username == "admin"){
                $account->Role = 'admin';
                session(['account'=>$account]);
                return redirect('/admin');
            } else {
                $account->Role = 'customer';
                session(['account'=>$account]);
                return redirect('/');
            }
        } else {
            return redirect("/")->with("alert","User tidak ditemukan !!!");
        }
    }

    //Logout Session
    public function signout(){
        session(['account'=>null]);
        return redirect('/');
    }
}
