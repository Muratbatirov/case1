<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Postavshik;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$category= Category::all();
      $pelesosi= $category[1]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Pelesos iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Pelesos TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Pelesos K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);

        $utyugi= $category[2]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Utyug iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Utyug TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Utyug K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);

        $gazonakosilki= $category[3]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Gazonakosilka iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Gazonakosilka TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Gazonakosilka K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);
        $blenderi= $category[5]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Blender iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Blender TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Blender K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);
        $kuxcombayni= $category[6]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Kux Kombayn iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Kux Kombayn TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Kux Kombayn K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);
         $mikrovalnovka= $category[7]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Mikrovalnovka iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Mikrovalnovka TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Mikrovalnovka K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);
        $svyaz= $category[9]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Smartfon iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Smartfon TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'Smartfon K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);
         $gadjet= $category[10]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'gadjet iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'gadjet TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'gadjet K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);
         $planshet= $category[11]->productsPerCategory()->createMany([
            ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'planshet iv500',
             'price'=> 200000,
             'quantity'=> 300,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'planshet TT800',
             'price'=> 500000,
             'quantity'=> 200,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           ['postavshik_id'=>Postavshik::inRandomOrder()->first()->id,
            'name'=> 'planshet K100',
             'price'=> 600000,
             'quantity'=> 100,
              'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
           ],
           
           ]);




         
            
    }
}
