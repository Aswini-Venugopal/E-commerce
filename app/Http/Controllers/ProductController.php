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
    public function paytm_redirect()
      {
        return redirect('/home');
      }
    public function add_redirect()
      {
         $category = DB::table('tbl_categories')->get();
        
        $sub_category = DB::table('tbl_sub_category')->get();
             
        return view('product-add')->with('category',$category)->with('sub_category',$sub_category);
        
      }


    public function add_product(Request $request)
      {
          
          $validator = Validator::make($request->all(),[
              'product_name' => 'required',          
              'category' => 'required|not_in:Select Category',
              'price' => 'required|numeric',
              'discount' => 'numeric',            
              'product_image' => 'required|mimes:jpeg,png'
          ]);
          
          if($validator->fails())
          {
              return  back()->withErrors($validator)->withInput($request->all());
          }
                                     
               $vendor_id = Auth::user()->id;
              
                $product_details['vendor_id']=$vendor_id;
                $product_details['product_name']=$request->input('product_name');
                $product_details['category']=$request->input('category');
                $product_details['sub_category']=$request->input('sub_category');
                $product_details['price']=$request->input('price');
                $product_details['discount']=$request->input('discount');
                $product_details['description']=$request->input('description');

                  if ($request->hasFile('product_image'))
                    {

                      $image =  Input::File('product_image');
                      $name = URL::to("/").'/product_image/'.$image->getClientOriginalName();
                      $image->move(public_path().'/product_image/',$image->getClientOriginalName());
                      $product_details['product_image']=$name;
                
                      DB::table('products')->insert($product_details);
                      return redirect('/home');
                    }
      }


    public function delete_product($id)
      {
       
       DB::table('products')->where('id', $id)->delete();
        return redirect('/view_product');

      }


    public function sub_category(Request $request)
    {
      $cat_id=$request->get('category_id');
       
        $sub_catt= DB::table("tbl_sub_category")->where("category_id",$cat_id)->get();
         echo json_encode($sub_catt);
    }

    public function view_product()
    {
      $vendor_id=Auth::user()->id;
      $products= DB::table("products")->where("vendor_id",$vendor_id)->get();


      

      return view('view_products')->with('products',$products);
    }

    public function edit_product($id){
      
      $products= DB::table("products")->where("id",$id)->get();
       $category = DB::table('tbl_categories')->get();
      return view('edit_product')->with('products',$products)->with('category',$category);
    }
    

    public function update_product(Request $request)
    {
       $validator = Validator::make($request->all(),[
              'product_name' => 'required',          
              'category' => 'required|not_in:Select Category',
              'price' => 'required|numeric',
              'discount' => 'numeric',            
              
          ]);
          
          if($validator->fails())
          {
              return  back()->withErrors($validator)->withInput($request->all());
          }
                                     
            
                $vendor_id = Auth::user()->id;
              
                $product_id=$request->input('product_id');

                $product_details['vendor_id']=$vendor_id;
                $product_details['product_name']=$request->input('product_name');
                $product_details['category']=$request->input('category');
                $product_details['sub_category']=$request->input('sub_category');
                $product_details['price']=$request->input('price');
                $product_details['discount']=$request->input('discount');
                $product_details['description']=$request->input('description');
                

                  if ($request->hasFile('product_image'))
                    {

                      $image =  Input::File('product_image');
                      $name = URL::to("/").'/product_image/'.$image->getClientOriginalName();
                      $image->move(public_path().'/product_image/',$image->getClientOriginalName());
                      $product_details['product_image']=$name;
                }
                      DB::table('products')->where('id',$product_id)->update($product_details);
                      return redirect('/view_product');
    
    }

    public function product_count()
    {
        $vendor_id=Auth::user()->id;
        echo $products=DB::table('products')->where('vendor_id',$vendor_id)->count();
        
        return redirect('/home')->with('product_count',$products);  
    }

    public function add_category(Request $request)
    {
      $category_name=$request->input('category_name');
      $new_category = array('category_name' => $category_name);
      DB::table('tbl_categories')->insert($new_category);
                      return redirect('/add_redirect');

    }

    public function add_sub_category(Request $request){
       $new_category=$request->input('new_category');
       $new_sub_category=$request->input('sub_category_name');
      $update_sub_category = array('category_id' =>$new_category ,'subcategory_name'=>$new_sub_category );
      DB::table('tbl_sub_category')->insert($update_sub_category);
                      return redirect('/add_redirect');
    }
}
