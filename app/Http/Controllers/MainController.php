<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    //
     public function __construct()
	{
		$this->middleware('auth');
	}
        
      function index(){
          if(\Auth::user()->status == '0'){
               $accesslevel = \Auth::user()->accesslevel;
                switch($accesslevel){
                    case 0:
                        return view('');
                        break;
                    case 1:
                        return view('');
                        break;
                    case 2:
                        return view('registrar.index');
                        break;
                    case 7:
                        return view('auth.register');
                        break;
                }
              
          } else {
              return view('suspended');
          }
      }  
}
