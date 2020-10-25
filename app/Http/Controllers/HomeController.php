<?php

namespace App\Http\Controllers;

use App\SerialNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Response;
use Illuminate\Support\Facades\Hash;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

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
            
    return response()->json(['errors' => 'Serial Number does not exists']);

        }else{
            
    return response()->json([

        'success' => 'VERIFIED.',
        'serial_number' =>$result->serial_number
        ]);
           


         }
      
    }
    public function AdminIndex()
    {
        $users = User::all();
        return view('admin.index',compact('users'));
    }
    public function AdminStore(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        if ($user->save()) {
            return redirect()->back();
            // '->with(['success','User Added Succesfully']);
        }else{
            
            return redirect()->back();
            // ->with(['error','User not Added ']);
        }
    }
    public function AdminUpdate(Request $request)
    {
        $user = User::findOrFail($request->category_id);
        $user->update([
            
            'email'=>$request->input('email'),
            'password'=> Hash::make($request->input('password')),
            
            ]);
        
        return back();
    }

    public function AdminDestroy(Request $request )
     {
        $user = User::findOrFail($request->category_id);
        $user->delete();

        return back();
    }
}
