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
              'sub_category' => 'required|not_in:Select sub_category',
              'child_category' => 'required|not_in:Select child_category',
              'child_category2' => 'required|not_in:Select child_category2',
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
                $product_details['child_category']=$request->input('child_category');
                $product_details['second_child_category']=$request->input('child_category2');
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
                    // DB::table('products')->insert($product_details);
                           
                   

                   if($request->hasfile('attachment'))
                {

                   foreach($request->file('attachment') as $image)
                   {
                       $name=URL::to("/").'/all_product_images/'.$image->getClientOriginalName();
                       
                       $image->move(public_path().'/all_product_images/', $name);
                       $data[] = $name;
                      $product_details['image_gallery']= implode("#@#", $data);

                   }
                  
                }
                  DB::table('products')->insert($product_details);
                  return redirect('/home');

    }


      // public function add_product(Request $request)
      // {
      //      if($request->hasfile('attachment'))
      //           {

      //              foreach($request->file('attachment') as $image)
      //              {
      //                  $name=$image->getClientOriginalName();

      //                  $image->move(public_path().'/all_product_images/', $name);
      //                  $data[] = $name;
      //                 $dat['image']= implode("//", $data);

      //              }
      //             Db::table('image')->insert($dat);
      //           }
      // }



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


    public function child_category1(Request $request)
    {
        
      $sub_id=$request->get('subcategory_id');
      $child_catt= DB::table("tbl_child_category_one")->where("subcategory_id",$sub_id)->get();
      echo json_encode($child_catt);
    }


    public function child_category2(Request $request)
    {

       
       $child_id=$request->get('childcat_id1');
      
      $child_catt= DB::table("tbl_child_category_two")->where("child_category_id",$child_id)->get();
      // print_r($child_catt);
      echo json_encode($child_catt);
    }



    public function view_product(Request $request)
    {
      $vendor_id=Auth::user()->id;
      $products= DB::table("products")->where("vendor_id",$vendor_id)->get();
      //$image_gallery= DB::table("products")->select('image_gallery')->where("vendor_id",$vendor_id)->get();

      foreach ($products as $value) 
      {
        $category_id=$value->category;
        $sub_name=$value->sub_category;
        $image_gallery=$value->image_gallery;
      }
       $cat_name= DB::table("tbl_categories")->select('category_name')->where("category_id",$category_id)->get();
       $sub_cat_name= DB::table("tbl_sub_category")->select('subcategory_name')->where("subcategory_id",$sub_name)->get();
      
       // $delimiters = Array("-");
       // $res = explode('#@#',$image_gallery);


      return view('view_products')->with('products',$products)->with('category',$cat_name)->with('sub',$sub_cat_name);
    }


    public function edit_product($id)
    {
      
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
                $product_details['child_category']=$request->input('child_category');
                $product_details['second_child_category']=$request->input('child_category2');
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

    

    public function add_category(Request $request)
    {
      $category_name=$request->input('category_name');
      $new_category = array('category_name' => $category_name);
      DB::table('tbl_categories')->insert($new_category);
      return redirect('/add_redirect');

    }

    public function add_sub_category(Request $request)
    {
      $new_category=$request->input('new_category');
      $new_sub_category=$request->input('sub_category_name');
      $update_sub_category = array('category_id' =>$new_category ,'subcategory_name'=>$new_sub_category );
      DB::table('tbl_sub_category')->insert($update_sub_category);
      return redirect('/add_redirect');
    }
}
