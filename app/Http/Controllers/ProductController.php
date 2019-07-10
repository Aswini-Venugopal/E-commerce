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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
use Validator;

class ProductController extends Controller
{
    public function redirect(){
      return view('product-add');
    }


    public function add_product(Request $request)
    {
      // echo "string";
      // exit();
       
       $validator = Validator::make($request->all(),[
            'product_name' => 'required',          
            'category' => 'required|not_in:Select Category',
            'price' => 'required|numeric',
            'discount' => 'numeric',            
            'product_image' => 'required|mimes:jpeg,png'
             ]);
if($validator->fails()) {
    return  back()->withErrors($validator)->withInput($request->all());
}
                                     
          //     echo "string";
          // exit();
             $vendor_id = Auth::user()->id;
          
            $product_details['vendor_id']=$vendor_id;
            $product_details['product_name']=$request->input('product_name');
            $product_details['category']=$request->input('category');
            $product_details['price']=$request->input('price');
            $product_details['discount']=$request->input('discount');

                       if ($request->hasFile('product_image'))

                                   {

                                    $image =  Input::File('product_image');


                                   $name = URL::to("/").'/product_image/'.$image->getClientOriginalName();
                                 $image->move(public_path().'/product_image/',$image->getClientOriginalName());
                                    $product_details['product_image']=$name;
                                    }
             
                
                 DB::table('products')->insert($product_details);
                 
              return redirect('/home');
                   
                }
                public function product_delete($id){
                  echo "string";
                  exit();

                }
}
