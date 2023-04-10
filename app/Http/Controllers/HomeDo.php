<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\Models\Account;

class HomeDo extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function validnull() {
        $var=session('account');
        if($var == null){
            return true;
        } 
        return false;
    }

    public function default() {
        return view("home");
    }
    public function about() {
        return view("about");
    }
    public function contact() {
        return view("contact");
    }
    public function service() {
        return view("service");
    }
    public function availgarage() {
        return view("availgarage");
    }
    public function booking() {
        if ($this->validnull()){
            return redirect('/login');
        }
        return view("booking");
    }
    public function technicians() {
        return view("technicians");
    }
    public function testimonial() {
        return view("testimonial");
    }
    public function inputotp() {
        return view("inputotp");
    }
    public function account() {
        return view("account");
    }
}
