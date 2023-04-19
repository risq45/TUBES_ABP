<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;
use App\Models\Account;
use App\Models\Workshop;
use App\Models\Favorite;
use App\Models\Service;
use App\Models\Transaction;

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
        $garage = DB::select('select * from workshops');
        $service = DB::select('select * from services');
        return view("booking", ['garage'=>$garage] , ['service'=>$service]);
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
        $var=session('account');
        if ($var->Username == "" && $var->Address == ""){
            return view("account")->withErrors(['Username' => ['Please, Fill The Section !'], 'Address' => ['Please, Fill The Section !']]);
        } else if ($var->Username == ""){
            return view("account")->withErrors(['Username' => 'Please, Fill The Section !']);
        } else if ($var->Address == ""){
            return view("account")->withErrors(['Address' => 'Please, Fill The Section !']);
        }
        return view("account");
    }
    public function admin() {
        $var = session('account');
        if ($var->Role == 'admin') {
            return view("admin");
        }
        return redirect('/');
    }
    public function addgarage() {
        $var = session('account');
        if ($var->Role == 'admin') {
            $garage = DB::select('select * from workshops');
            return view("addgarage", ['garage'=>$garage]);
        }
        return redirect('/');
    }
    public function editgarage() {
        $var = session('account');
        if ($var->Role == 'admin') {
            $garage = DB::select('select * from workshops');
            return view("editgarage", ['grg1'=>$garage]);
        }
        return redirect('/');
    }
    public function editgaragedetail(Request $req) {
        $var = session('account');
        if ($var->Role == 'admin') {
            $garage = DB::table('workshops')->where('Nama', $req->Nama)->first();
            return view("editgrgdetail", ['grg2'=>$garage]);
        }
        return redirect('/');
    }
    public function deletegarage() {
        $var = session('account');
        if ($var->Role == 'admin') {
            $garage = DB::select('select * from workshops');
            return view("deletegarage", ['grg1'=>$garage]);
        }
        return redirect('/');
        
    }
    public function paymentoption() {
        return view("paymentoption");
    }
}
