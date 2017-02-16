<?php

namespace App\Http\Controllers\RegistrarController;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class EnrollmentRequest extends Controller
{
    
    public function __construct()
	{
		$this->middleware('auth');
	}
        
    function requestlist(){      
        if(\Auth::user()->accesslevel == $this->getUserLevel("Registrar")){ 
        return view('registrar.enrollmentrequest');
        } 
    } 
        
    function getUserLevel($userlevel){
        $accesslevel= \App\CtrUserLevel::where('userlevel',$userlevel)->first();
        return $accesslevel->accesslevel;
    }
   
}
