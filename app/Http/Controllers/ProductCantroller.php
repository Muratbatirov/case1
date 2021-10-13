<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Postavshik;

class ProductCantroller extends Controller
{
    
 public function productlistedit($id ,Request $request ){


$product= Product::where('id',$id)->first();
$data= $request->input();
foreach($data as $x => $x_value) {
    if ( $x== '_dc'){continue;}
  $product->$x= $x_value;
 $product->save();
}

 $productss = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity'  ,'categories.id as category_id','products.opisanie as opisanie','postavshiks.id as postavshik_id')->where('products.id', $id)
            
                ->get()->toArray();

                
         $arr = [];      
           $arr['success']=true;
            $arr['data']=$productss;
            


            
             $arr['id']=$id;
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
 public function productadd(Request $request ){


$product= new Product();
$product->category_id=$request->input('category_id');
$product->postavshik_id=$request->input('postavshik_id');
$product->name=$request->input('name');
$product->price=$request->input('price');
$product->quantity=$request->input('quantity');
$product->opisanie=$request->input('opisanie');

$product->save();

                
         $arr = [];      
           $arr['success']=true;
          //  $arr['data']=$productss;
            


            
            // $arr['id']=$id;
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);



 }
 
}
