<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Direction;
use Carbon\Carbon;
class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {


 Direction::create([
            
            'name'=> 'Поставка оборудования',
            'director'=>'Яковлев Ким Иванович',
            'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"
           
           ])->childdirections()->createMany([
             
            [
              'name'=> 'Промышленная автоматизация и системы управления производством',
             'director'=>'Яценюк Йосып Фёдорович',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],  

            [
              'name'=> 'POS-системы, торговое оборудование',
             'director'=>'Третьяков Гавриил Алексеевич',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
         [
              'name'=> 'Медицинское оборудование и изделия',
             'director'=>'Антонов Йосеф Эдуардович',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
         [
              'name'=> 'Весоизмерительное оборудование',
             'director'=>'Федоренко Карл Александрович',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
       
         
             
          ]);
            Direction::create([
            
            'name'=> 'Информационные технологии',
            'director'=>'Красинец Антонин Петрович',
            'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"
           
           ])->childdirections()->createMany([
             
            [
              'name'=> 'Разработка программного обеспечения',
             'director'=>'Коровяк Николай Богданович',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],  

            [
              'name'=> 'Лицензионное программное обеспечение',
             'director'=>'Беляев Заур Васильевич',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
         [
              'name'=> 'Учебный центр',
             'director'=>'Гелетей Шарль Викторович',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
         [
              'name'=> 'Micros24 - Цифровой офис',
             'director'=>'Петрик Остин Алексеевич',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
       
         
             
          ]);
           Direction::create([
            
            'name'=> 'Производство',
            'director'=>'Гришин Илья Васильевич',
            'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"
           
           ])->childdirections()->createMany([
             
            [
              'name'=> 'Полиграфическое производство',
             'director'=>'Сергеев Павел Львович',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],  

            [
              'name'=> 'Производство окон, дверей и витражей из ПВХ',
             'director'=>'Колобов Тит Валериевич',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
         [
              'name'=> 'Фурнитура и комплектующие для окон и дверей',
             'director'=>'Николаев Тарас Евгеньевич',
              'opisanie'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged"

        ],
        
       
         
             
          ]);



        


       
    }
}
