<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Postavshik;
use App\Models\Direction;
use App\Models\Employee;

class DirectionCantroller extends Controller
{





  public function directions(){


 

     
          $directions=Direction::select('name', 'id', 'parent_id', 'director', 'opisanie')->get()->toArray();

         
  $resarray = [
         "success"=> true,
         ];
          

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


$categoriestree= buildTree($directions);



  
  $resarray['children'] = $categoriestree;
       
     return json_encode($resarray, JSON_UNESCAPED_UNICODE);



  
 
       
     






     

    }
  public function directionlistcombo(){


 

     
          $directions=Direction::select('name', 'id', 'parent_id', 'director', 'opisanie')->get()->toArray();

         
  $resarray = [
         "success"=> true,
         ];
          

        



  
  $resarray['data'] = $directions;
       
     return json_encode($resarray, JSON_UNESCAPED_UNICODE);



  
 
       
     






     

    }
public function directionlistedit(Request $request ){
$category= Direction::where('id',$request->input('id'))->first();

$parentid;
if($request->input('parent_id')==0){
$parentid=null;
}else{
  $parentid=$request->input('parent_id');
}

$category->name=$request->input('name');
$category->director=$request->input('director');
$category->opisanie=$request->input('opisanie');
$category->parent_id=$parentid;
$category->save();




                
         $arr = [];      
           $arr['success']=true;
    
            


            
        
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
  public function directionlistdelete(Request $request){

    if(Direction::where('id',$request->id)->first()->childdirections()->count()!=0) {
 
         
$res ="Etot napravleniya imeet podkategorii";
           return $res;


}

if(Employee::where('direction_id',$request->id)->count()!=0) {
 
         
$res ="Etot napravleniya imeet sotrudniki";
           return $res;


}
$product= Direction::where('id',$request->id)->first();
$product->delete();
 

           return 'true';


 }
 public function directionlistadd(Request $request ){


$emploee= new Direction();
$data= $request->input();
foreach($data as $x => $x_value) {
    if ( $x== '_dc'){continue;}
  $emploee->$x= $x_value;

}
 $emploee->save();






                
         $arr = [];      
           $arr['success']=true;
          //  $arr['data']=$productss;
            


            
            // $arr['id']=$id;
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);



 }


 public function reports(Request $request){

$directions = DB::table('employees')
            ->rightJoin('directions', 'directions.id', '=', 'employees.direction_id' )
            ->select( 'directions.id','directions.parent_id','directions.name',  DB::raw("count(case when dismissed = '0' then 1 end) as currentnum"),DB::raw("count(case when dismissed = '1' then 1 end) as exitnum"))
            ->groupBy('directions.name','directions.id','directions.parent_id')->get()->toArray();


function buildTree(array &$elements, $parentId = 0) {

    $branch = array();

    foreach ($elements as &$elemen) {
 $element =(array)$elemen;
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


$categoriestree= buildTree($directions);



 $arr = [];      
           $arr['success']=true;
           $arr['children']=$categoriestree;

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


}



public function directioneditcombo(){

$categorycombo = DB::table('directions as parent') ->rightJoin('directions as child', 'parent.id', '=', 'child.parent_id' )->
select( 'child.parent_id', 'child.id','child.name as direction','parent.name as parentdirection')->get()->toArray();

$arrayy=[];
 



        

function recursive(&$arr, $data, $parent_id = 0, $level = 0){

 
  $arrayy = array();  
    foreach ($data as $ro)   { 
      $row =(array)$ro;
        if ($row['parent_id'] == $parent_id)   { 
            $_row['id']    = $row['id'];
            $_row['parent_id']    = $row['parent_id'];
              $_row['direction']   = $row['direction']; 
               $_row['parentdirection']   = $row['parentdirection']; 
           
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

}


















    
 