<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Postavshik;

class CategoryCantroller extends Controller
{
    public function categories(){


   // dd(Category::all());

        $resarray = [
         "success"=> true,
         ];
          $categories=Category::select('name as text', 'id' ,'parent_id')->get()->toArray();

          function buildTree(array &$elements, $parentId = 0) {

    $branch = array();

    foreach ($elements as &$element) {

        if ($element['parent_id'] == $parentId) {
            $children = buildTree($elements, $element['id']);
            if ($children) {
                $element['children'] = $children;
            }else{
            	 $element['leaf'] = true;
            }
            array_push($branch, $element);
            unset($element);
        }
    }
    return $branch;
}


$categoriestree= buildTree($categories);



  
  $resarray['children'] = $categoriestree;
       
     return json_encode($resarray, JSON_UNESCAPED_UNICODE);
     

    }
    public function productlist(Request $request){
if($request->param!='false' and $request->param ){
 $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity'  )->where('categories.name', $request->param)->skip($request->start)->take(10)
            
                ->get()->toArray();
 $productscount = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity'  )->where('categories.name', $request->param)
            
                ->get()->toArray();
                
              
             $arr = [];
             $arr['success']=true;
            $arr['data']=$products;
            $arr['total']=count($productscount);

          

            
 
      
   
           return json_encode($arr, JSON_UNESCAPED_UNICODE);
}else{

	 $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity'  )->skip($request->start)->take(10)
            
                ->get()->toArray();
 $productscount = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity'  )
            
                ->get()->toArray();
                
              
             $arr = [];
             $arr['success']=true;
            $arr['data']=$products;
            $arr['total']=count($productscount);

          

            
 
      
   
           return json_encode($arr, JSON_UNESCAPED_UNICODE);



}


}
}