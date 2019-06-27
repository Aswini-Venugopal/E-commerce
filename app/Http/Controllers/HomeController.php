<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Validator;
use Auth;

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
    public function countries()
    {
        $countryname = DB::table('countries')
            ->get();
            $statename = DB::table('states')->get();
            $district = DB::table('districts')->get();
             
        return view('edit_profile')->with('country',$countryname)->with('state',$statename)->with('district',$district);
        
    }
    public function district(){
        // echo $get_id=$request->input('state_id');
        echo "hello";
         // return response()->json($get_id);
    }

    

    public function index()
    {
        return view('home');
    }
   

    public function edit(Request $request)
    {
        $this->validate($request,[ 
            'reg_no' => 'required',          
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email',             
            'place' => 'required', 
            'district' => 'required', 
            'state' => 'required', 
            'country' => 'required', 
            'pincode' => 'required',          
            'landmark' => 'required',
            'fax' => 'required|numeric|digits:10',  
            'landline_number' => 'required|numeric|digits:10',
            'web_url' => 'required',
            'fb_url' => 'required',
            'insta_url' => 'required',
            'logo' => 'required| dimensions:width=84,height=84',
            'image' => 'required',

             ]);

              
            $user_id = Auth::user()->id;
            $updateDetails=array( 
                                  'comp_reg_number'=>$request->input('reg_no'),
                                    'name' => $request->input('name'),
                                    'phone'=>$request->input('phone'),
                                    'email' => $request->input('email'),
                                    'place' => $request->input('place'),
                                    'district' => $request->input('district'),
                                    'state' => $request->input('state'),
                                    'country' => $request->input('country'),
                                    'pincode'=>$request->input('pincode'),
                                    
                                    'landmark'=>$request->input('landmark'),
                                    'fax'=>$request->input('fax'),
                                    'landline_number'=>$request->input('landline_number'),
                                    'website'=>$request->input('web_url'),
                                    'facebook_url'=>$request->input('fb_url'),
                                    'instagram_url'=>$request->input('insta_url'),
                                     'logo'=>$request->input('logo'),
                                  'image'=>$request->input('image'),
                                );

                                   
                    DB::table('vendor_registration')
                        ->where('id', Auth::user()->id)
                        ->update($updateDetails);

                        if(Input::hasFile('image'))
                {

                    $file = Input::file('image');
                    $file->move(public_path().'/image/',$file->getClientOriginalName());
                    $url = URL::to("/").'/image/'.$file->getClientOriginalName();


                    $updateDetails=array(
                                    'image' => $url
                                  );

                     DB::table('vendor_registration')
                        ->where('id', Auth::user()->id)
                        ->update($updateDetails);

                    //$vendor_registration->image = $url;
                }
                 if(Input::hasFile('logo'))
                {

                    $file = Input::file('logo');
                    $file->move(public_path().'/image/',$file->getClientOriginalName());
                    $url = URL::to("/").'/image/'.$file->getClientOriginalName();


                    $updateDetails=array(
                                    'logo' => $url
                                  );

                     DB::table('vendor_registration')
                        ->where('id', Auth::user()->id)
                        ->update($updateDetails);

                    // $vendor_registration->image = $url;
                }
                return view('/profile');
                   
                }
public function logout(Request $request)
{
    // $this->guard()->logout();

    $request->session()->flush();

    $request->session()->regenerate();

    return redirect('login');
}
// public function delete(Request $request)
//     {
//          $user_id = Auth::user()->id;

//         DB::table('vendor_registration')->where('id', $user_id)->delete();
       
       
//         return view('home');


//     }
    
}
