<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Postavshik;

class PostavshikCantroller extends Controller
{







 public function postavshikcombo(){

$postavshikcombo = Postavshik::select('id', 'name as postavshik')->get()->toArray();
 $arr = [];
             $arr['success']=true;
              $arr['data']=$postavshikcombo;

           return json_encode($arr, JSON_UNESCAPED_UNICODE);


 }
}
