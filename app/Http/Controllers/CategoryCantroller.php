<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
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
	$category= Category::where('name',$request->param)->first();
$selector;
$value;
 if(count($category->childcategories->toArray())!=0){

$selector = 'categories.parent_id';
$value = $category->id;

 }else{
 	$selector = 'categories.name';
$value = $request->param;
 }
 $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity' ,'categories.id as category_id','products.opisanie as opisanie','postavshiks.id as postavshik_id' )->where($selector, $value)->skip($request->start)->take($request->limit)
            
                ->get()->toArray();
 $productscount = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity','categories.id as category_id','products.opisanie as opisanie','postavshiks.id as postavshik_id' )->where($selector, $value)
            
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
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity'  ,'categories.id as category_id','products.opisanie as opisanie','postavshiks.id as postavshik_id')->skip($request->start)->take($request->limit)
            
                ->get()->toArray();
 $productscount = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id' )
            ->join('postavshiks', 'postavshiks.id', '=', 'products.postavshik_id' )
            
            ->select( 'products.id','categories.name AS category', 'postavshiks.name AS postavshik', 'products.name as name', 'products.price','products.quantity' ,'categories.id as category_id','products.opisanie as opisanie','postavshiks.id as postavshik_id' )
            
                ->get()->toArray();
                
              
             $arr = [];
             $arr['success']=true;
            $arr['data']=$products;
            $arr['total']=count($productscount);

          

            
 
      
   
           return json_encode($arr, JSON_UNESCAPED_UNICODE);



}


}
 public function productlistdelete(Request $request){


$product= Product::where('id',$request->recordid)->first();
$product->delete();
 $arr = [];
             $arr['success']=true;

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
 public function categorycombo(){
 	$categorycomboarray =[];

$categorycombo = Category::select('id', 'name as category')->get();
foreach ($categorycombo as $key) {
	if(count($key->childcategories->toArray())==0){
		array_push($categorycomboarray,$key->toArray());
	}
}
$categorycomboarray;

 $arr = [];
             $arr['success']=true;
              $arr['data']=$categorycomboarray;

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
 
  public function categoryeditcombo(){

$categorycombo = DB::table('categories as parent') ->rightJoin('categories as child', 'parent.id', '=', 'child.parent_id' )->
select( 'child.parent_id', 'child.id','child.name as category','parent.name as parentcategory')->get()->toArray();

$arrayy=[];
 



        

function recursive(&$arr, $data, $parent_id = 0, $level = 0){

 
  $arrayy = array();  
    foreach ($data as $ro)   { 
    	$row =(array)$ro;
        if ($row['parent_id'] == $parent_id)   { 
            $_row['id']    = $row['id'];
            $_row['parent_id']    = $row['parent_id'];
              $_row['category']   = $row['category']; 
               $_row['parentcategory']   = $row['parentcategory']; 
           
            $_row['level']  = $level;       

            $arr[] = $_row;
            recursive($arr, $data, $row['id'], $level + 1);
        }

    }
     
}
recursive($arrayy,$categorycombo); 



$arr = [];
             $arr['success']=true;
              $arr['data']=$arrayy;

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }

 public function categoryupdate(Request $request ){


$category= Category::where('id',$request->input('recordid'))->first();

$parentid;
if($request->input('parent_id')==0){
$parentid=null;
}else{
	$parentid=$request->input('parent_id');
}
$category->name=$request->input('name');
$category->parent_id=$parentid;
$category->save();

                
         $arr = [];      
           $arr['success']=true;
          //  $arr['data']=$productss;
            


            
            // $arr['id']=$id;
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
  public function categorydelete(Request $request ){


$category= Category::where('id',$request->input('id'))->first();
if(Category::where('parent_id',$request->input('id'))->count()!=0) {
 
         
$res ="Etot katoegoriya imeet podkategorii, pojalyusta udalite podkotegorii";
           return $res;


}
elseif(Product::where('category_id',$request->input('id'))->count()!=0) {

 $res ="Etot katoegoriya imeet produkti, pojalyusta udalite produkti";
            return $res;


}
else{

$category->delete();

                
         $arr = [];      
           $arr['success']=true;
        
         

           return 'true';


 }}

 public function categoryadd(Request $request ){


$category= new Category();

$parentid;
if($request->input('parent_id')==0){
$parentid=null;
}else{
	$parentid=$request->input('parent_id');
}
$category->name=$request->input('name');
$category->parent_id=$parentid;
$category->save();

                
         $arr = [];      
           $arr['success']=true;
          //  $arr['data']=$productss;
            


            
            // $arr['id']=$id;
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }



}
