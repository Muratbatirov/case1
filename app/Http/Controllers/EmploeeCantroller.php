<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Direction;
use App\Models\Postavshik;
use App\Models\Employee;

class EmploeeCantroller extends Controller
{






 public function emploeelist(Request $request){

if($request->param!='false' and $request->param ){
  $emploee= Direction::where('name',$request->param)->first();

 $emploees = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','directions.id AS direction_id','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')->where('directions.name', $request->param)->skip($request->start)->take($request->limit)
            
                ->get()->toArray();
 $productscount = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','directions.id AS direction_id','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')->where('directions.name', $request->param)
                ->get()->toArray();
                
              
             $arr = [];
             $arr['success']=true;
            $arr['data']=$emploees;
            $arr['total']=count($productscount);

          

           return json_encode($arr, JSON_UNESCAPED_UNICODE);
}else{

   $products = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','directions.id AS direction_id','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')->skip($request->start)->take($request->limit)
            
                ->get()->toArray();
 $productscount = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','directions.id AS direction_id','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')
            
                ->get()->toArray();
                
              
             $arr = [];
             $arr['success']=true;
            $arr['data']=$products;
            $arr['total']=count($productscount);

          

            
 
      
   
           return json_encode($arr, JSON_UNESCAPED_UNICODE);



}


}

 
 public function emploeelistedit($id ,Request $request ){


$product= Employee::where('id',$id)->first();
$data= $request->input();
foreach($data as $x => $x_value) {
    if ( $x== '_dc' || $x=='param'){continue;}
  $product->$x= $x_value;
 $product->save();
}

 $productss = DB::table('employees')
            ->join('directions', 'directions.id', '=', 'employees.direction_id' )
            
            
            ->select( 'employees.id', 'surname', 'employees.name as name', 'patronymic','directions.name AS direction','directions.id AS direction_id','gender','birthdate'  ,'phonenum','passportnum','position', 'wages','dismissed','comedate', 'exitdate')->where('employees.id', $id)
            
                ->get()->toArray();

                
         $arr = [];      
           $arr['success']=true;
            $arr['data']=$productss;
            


            
             $arr['id']=$id;
         

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }

  public function emploeeadd(Request $request ){


$emploee= new Employee();
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
  public function emploeelistdelete(Request $request){


$product= Employee::where('id',$request->id)->first();
$product->delete();
 $arr = [];
             $arr['success']=true;

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
}
