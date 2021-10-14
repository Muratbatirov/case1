<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Postavshik;
use App\Models\Direction;

class DirectionCantroller extends Controller
{





  public function directions(){


   // dd(Category::all());

        $resarray = [
         "success"=> true,
         ];
          $categories=Direction::select('name', 'id' ,'director', 'opisanie')->get()->toArray();

         




  
  $resarray['data'] = $categories;
       
     return json_encode($resarray, JSON_UNESCAPED_UNICODE);
     

    }
 


}





















    
 