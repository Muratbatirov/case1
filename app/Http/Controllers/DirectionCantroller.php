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


   // dd(Category::all());

        $resarray = [
         "success"=> true,
         ];
          $categories=Direction::select('id','name',  'director', 'opisanie')->get()->toArray();

         




  
  $resarray['data'] = $categories;
       
     return json_encode($resarray, JSON_UNESCAPED_UNICODE);
     

    }

public function directionlistedit($id ,Request $request ){


$product= Direction::where('id',$id)->first();
$data= $request->input();
foreach($data as $x => $x_value) {
    if ( $x== '_dc'){continue;}
  $product->$x= $x_value;
 $product->save();
}

 $direction = Direction::select('id' ,'name', 'director', 'opisanie')->where("id",$id)->first()->toArray();

                
         $arr = [];      
           $arr['success']=true;
            $arr['data']=$direction;
            


            
             $arr['id']=$id;
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
  public function directionlistdelete(Request $request){

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
            ->select( 'directions.name',  DB::raw("count(case when dismissed = '0' then 1 end) as currentnum"),DB::raw("count(case when dismissed = '1' then 1 end) as exitnum"))
            ->groupBy('directions.name')->get()->toArray();


 $arr = [];      
           $arr['success']=true;
           $arr['data']=$directions;

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


}

}


















    
 