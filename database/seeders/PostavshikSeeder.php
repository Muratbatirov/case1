<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Postavshik;
class PostavshikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Postavshik::create(
         	['name'=> 'Samsung Group Chilanzar',
         	'phone'=> '+998931234567',
         	'contact_men'=> 'Ganiev Zafar',
         	'sayt'=> 'samsunggrchilanzar.uz',
         	'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
               ]);
          Postavshik::create(
         	['name'=> 'Artel Group Mirabad',
         	'phone'=> '+998931234567',
         	'contact_men'=> 'Abduraxmanov Umid',
         	'sayt'=> 'artelgrmirabad.uz',
         	'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
               ]);
           Postavshik::create(
         	['name'=> 'Send carier Chilanzar',
         	'phone'=> '+998931234567',
         	'contact_men'=> 'Musabayev Sardar',
         	'sayt'=> 'sendcarier.uz',
         	'opisanie'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'
               ]);
    }
}
