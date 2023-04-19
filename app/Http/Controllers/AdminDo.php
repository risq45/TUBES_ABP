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
use App\Models\Workshop;
use App\Models\Favorite;
use App\Models\Service;
use App\Models\Transaction;

use mysqli;
use Session;
use DB;


class AdminDo extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function addgrg(Request $req) {
        if (DB::table('workshops')->where('Nama', $req->Nama)->first() == null) {
            $grg = new Workshop;
            $grg->Nama = $req->Nama;
            $grg->Address = $req->Address;
            $grg->Motto = "a";
            $grg->Photo = "a";
            $grg->save();

            $svc = new Service;
            $svc->WorkshopID = DB::table('workshops')->where('Nama', $req->Nama)->pluck('WorkshopID')[0];
            $svc->JenisKendaraan = $req->JenisKendaraan;
            $svc->JenisServis = "aw";
            $svc->Biaya = $req->Biaya;
            $svc->save();
        } else {
            if (DB::table('services')->where('JenisKendaraan', $req->JenisKendaraan)->first() == null) {
                $svc = new Service;
                $svc->WorkshopID = DB::table('workshops')->where('Nama', $req->Nama)->pluck('WorkshopID')[0];
                $svc->JenisKendaraan = $req->JenisKendaraan;
                $svc->JenisServis = "aw";
                $svc->Biaya = $req->Biaya;
                $svc->save();
            }
        }
        return redirect('/admin'); 
    }

    public function editgrg(Request $req) {
        $var = DB::table('workshops')->where('Nama', $req->NamaOld)->first();
        if ($var != null) {
            //if (DB::table('services')->where('WorkshopID', $var->WorkshopID)->pluck('JenisKendaraan')[0] == $req->JenisKendaraan) {
                DB::table('workshops')->where('Nama', $req->NamaOld)
                    ->update(['Nama'=>$req->Nama], ['Address'=>$req->Address] );
                DB::table('services')->where('WorkshopID', $var->WorkshopID)
                    ->update(['Biaya'=>$req->Biaya]);
            //}
            return redirect('/admin');
        } 
        return redirect('/admin'); 
    }

    public function deletegrg(Request $req) {
        DB::table('workshops')->where('Nama', $req->Nama)->delete();
        return redirect('/admin');
    }
    
}
