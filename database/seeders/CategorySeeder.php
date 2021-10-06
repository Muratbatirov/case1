<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Category::create([
       	    
       	    'name'=> 'Техника для дома',
           
           ])->childcategories()->createMany([
               
            ['name'=> 'Пылесосы'],
             ['name'=> 'Утюги'],
              ['name'=> 'Газонокосилки'],
             
          ]);
         Category::create([
       	    
       	    'name'=> 'Техника для кухни',
           
           ])->childcategories()->createMany([
               
            [ 'name'=> 'Блендеры'],
              ['name'=> 'Кухонные комбайны'],
              [ 'name'=> 'Микроволновые печи'],
             
          ]);
           Category::create([
            
            'name'=> 'Телефоны и планшеты',
           
           ])->childcategories()->createMany([
               
            [ 'name'=> 'Средства связи'],
              ['name'=> 'Гаджеты'],
              [ 'name'=> 'Планшеты'],
             
          ]);
            


       
    }
}
