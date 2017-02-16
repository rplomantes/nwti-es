<?php

namespace App\Http\Controllers\RegistrarController;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Registration extends Controller
{
    //
    public function __construct()
	{
		$this->middleware('auth');
	}
        
    public function index(){ 
    return view('registrar.registration');
    }
    
    public function newstudent(){
        /*
        $varid=\Auth::user()->id;
        $user = \App\User::find($varid);
        $refno = $user->referenceid;
        $varrefno = strval($refno);
        $user->referenceid = $refno + 1;
        $user->update(); 
        $sy = \App\CtrRefSchoolyear::first();
      
        for($i=strlen($varrefno); $i <= 2 ;$i++){
                $varrefno = "0" . $varrefno;    
        }
            
        $value = substr($sy->schoolyear,2,2) . $user->terminalid . $varrefno;
        $intval = 0;
            
        for($y=1; $y<= strlen($value); $y++){
                $sub = substr($value,$y);
                $intval = $intval + intval($sub);
        }
              //$intval = $intval%9;
        $varrefno = $value . strval($intval%9); 
        return $varrefno;*/
        return view('registrar.newstudent');
    }
}