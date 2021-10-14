<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Direction;
use App\Models\Postavshik;

class EmploeeCantroller extends Controller
{






 public function emploeelist(Request $request){

if($request->param!='false' and $request->param ){
  $emploee= Direction::where('name',$request->param)->first();

 $emploees = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')->where('directions.name', $request->param)->skip($request->start)->take($request->limit)
            
                ->get()->toArray();
 $productscount = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')->where('directions.name', $request->param)
                ->get()->toArray();
                
              
             $arr = [];
             $arr['success']=true;
            $arr['data']=$emploees;
            $arr['total']=count($productscount);

          

           return json_encode($arr, JSON_UNESCAPED_UNICODE);
}else{

   $products = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')->skip($request->start)->take($request->limit)
            
                ->get()->toArray();
 $productscount = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')
            
                ->get()->toArray();
                
              
             $arr = [];
             $arr['success']=true;
            $arr['data']=$products;
            $arr['total']=count($productscount);

          

            
 
      
   
           return json_encode($arr, JSON_UNESCAPED_UNICODE);



}


}





















    
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
