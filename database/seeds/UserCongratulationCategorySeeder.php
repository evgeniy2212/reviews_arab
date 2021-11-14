<?php

use Illuminate\Database\Seeder;
use App\Models\UserCongratulationCategory;

class UserCongratulationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'title' => [
                    'en' => 'Birthday of Martin Luther King Jr.',
                    'ar' => 'День рождения Мартина Лютера Кинга-младшего.'
                ],
                'name' => [
                    'en' => 'Birthday of Martin Luther King Jr.',
                    'ar' => 'День рождения Мартина Лютера Кинга-младшего.'
                ],
                'slug' => \Illuminate\Support\Str::slug('Birthday of Martin Luther King Jr'),
                'is_published' => false,
            ],
            [
                'title' => [
                    'en' => 'Christmas',
                    'ar' => 'Рождество'
                ],
                'name' => [
                    'en' => 'Christmas',
                    'ar' => 'Рождество'
                ],
                'slug' => \Illuminate\Support\Str::slug('Christmas'),
                'is_published' => true,
            ],
//            [
//                'title' => [
//                    'en' => 'Columbus Day',
//                    'ar' => 'Columbus Day'
//                ],
//                'name' => [
//                    'en' => 'Columbus Day',
//                    'ar' => 'Columbus Day'
//                ],
//                'slug' => \Illuminate\Support\Str::slug('Columbus Day'),
//                'is_published' => false,
//            ],
            [
                'title' => [
                    'en' => 'Easter',
                    'ar' => 'Пасха'
                ],
                'name' => [
                    'en' => 'Easter',
                    'ar' => 'Пасха'
                ],
                'slug' => \Illuminate\Support\Str::slug('Easter'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Engagements',
                    'ar' => 'Помолвка'
                ],
                'name' => [
                    'en' => 'Engagements',
                    'ar' => 'Помолвка'
                ],
                'slug' => \Illuminate\Support\Str::slug('Engagements'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Father`s Day',
                    'ar' => 'День отца'
                ],
                'name' => [
                    'en' => 'Father`s Day',
                    'ar' => 'День отца'
                ],
                'slug' => \Illuminate\Support\Str::slug('Father`s Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Graduation',
                    'ar' => 'Выпускной'
                ],
                'name' => [
                    'en' => 'Graduation',
                    'ar' => 'Выпускной'
                ],
                'slug' => \Illuminate\Support\Str::slug('Graduation'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Happy anniversary',
                    'ar' => 'С годовщиной'
                ],
                'name' => [
                    'en' => 'Happy anniversary',
                    'ar' => 'С годовщинов'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy anniversary'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Happy birthday',
                    'ar' => 'День рождения'
                ],
                'name' => [
                    'en' => 'Happy birthday',
                    'ar' => 'День рождения'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy birthday'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Independence Day',
                    'ar' => 'День независимости'
                ],
                'name' => [
                    'en' => 'Independence Day',
                    'ar' => 'День независимости'
                ],
                'slug' => \Illuminate\Support\Str::slug('Independence Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Labor Day',
                    'ar' => 'День труда'
                ],
                'name' => [
                    'en' => 'Labor Day',
                    'ar' => 'День труда'
                ],
                'slug' => \Illuminate\Support\Str::slug('Labor Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Memorial Day',
                    'ar' => 'День памяти'
                ],
                'name' => [
                    'en' => 'Memorial Day',
                    'ar' => 'День памяти'
                ],
                'slug' => \Illuminate\Support\Str::slug('Memorial Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Mother`s Day',
                    'ar' => 'День матери'
                ],
                'name' => [
                    'en' => 'Mother`s Day',
                    'ar' => 'День матери'
                ],
                'slug' => \Illuminate\Support\Str::slug('Mother`s Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New born',
                    'ar' => 'С рождением'
                ],
                'name' => [
                    'en' => 'New born',
                    'ar' => 'С рождением'
                ],
                'slug' => \Illuminate\Support\Str::slug('New born'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New home',
                    'ar' => 'Новоселье'
                ],
                'name' => [
                    'en' => 'New home',
                    'ar' => 'Новоселье'
                ],
                'slug' => \Illuminate\Support\Str::slug('New home'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New year',
                    'ar' => 'Новый год'
                ],
                'name' => [
                    'en' => 'New year',
                    'ar' => 'Новый год'
                ],
                'slug' => \Illuminate\Support\Str::slug('New year'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Promotion',
                    'ar' => 'Продвижение'
                ],
                'name' => [
                    'en' => 'Promotion',
                    'ar' => 'Продвижение'
                ],
                'slug' => \Illuminate\Support\Str::slug('Promotion'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Starting a new business',
                    'ar' => 'Старт нового бизнеса'
                ],
                'name' => [
                    'en' => 'Starting a new business',
                    'ar' => 'Старт нового бизнеса'
                ],
                'slug' => \Illuminate\Support\Str::slug('Starting a new business'),
                'is_published' => true,
            ],
//            [
//                'title' => [
//                    'en' => 'Thanksgiving',
//                    'ar' => 'Thanksgiving'
//                ],
//                'name' => [
//                    'en' => 'Thanksgiving',
//                    'ar' => 'Thanksgiving'
//                ],
//                'slug' => \Illuminate\Support\Str::slug('Thanksgiving'),
//                'is_published' => false,
//            ],
            [
                'title' => [
                    'en' => 'Veterans Day',
                    'ar' => 'День ветеранов'
                ],
                'name' => [
                    'en' => 'Veterans Day',
                    'ar' => 'День ветеранов'
                ],
                'slug' => \Illuminate\Support\Str::slug('Veterans Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Wedding',
                    'ar' => 'Свадьба'
                ],
                'name' => [
                    'en' => 'Wedding',
                    'ar' => 'Свадьба'
                ],
                'slug' => \Illuminate\Support\Str::slug('Wedding'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Other',
                    'ar' => 'Другое'
                ],
                'name' => [
                    'en' => '',
                    'ar' => ''
                ],
                'slug' => \Illuminate\Support\Str::slug('Other'),
                'is_published' => true,
            ],
        ];

        foreach($categories as $category){
            $userCongratData = [];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $userCongratData[$localeKey] = [
                    'title' => $category['title'][$localeKey],
                    'name' => $category['name'][$localeKey],
                ];
            }
            UserCongratulationCategory::updateOrCreate(
                [
                    'slug' => $category['slug'],
                    'is_published' => $category['is_published'],
                ],
                $userCongratData
            );
        }
    }
}
