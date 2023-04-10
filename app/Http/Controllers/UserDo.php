<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\Models\Account;

class UserDo extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //Regist Session
    public function regist() {
        return view("regist");
    }

    public function signup(Request $req){
        $req->validate(['Password' => 'required|confirmed|min:6']);
        $account = new Account;
        $account->Email = $req->Email;
        $account->Number = $req->Number;
        $account->Password = sha1($req->Password);
        $account->save();

        return redirect('/login');
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
