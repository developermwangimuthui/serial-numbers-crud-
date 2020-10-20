<?php

namespace App\Http\Controllers;

use App\SerialNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('serialnumber.index');
    }
    public function confirm_sno(Request $request)
    {
        $result = SerialNumber::where('serial_number','=',Input::get('serialnumber'))->first();
        if ($result === null) {
            return redirect()->back()->with(['error' => 'Serial Number does not exists']);

        }else{
            return redirect()->back()->with(['success' => 'Serial Number exists']);


         }
      
    }
}
