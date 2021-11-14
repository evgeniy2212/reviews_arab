<?php

use Illuminate\Database\Seeder;

class UserImportantDateTypeSeeder extends Seeder
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
                    'en' => 'Good Friday',
                    'ar' => 'Хорошей пятницы'
                ],
                'name' => [
                    'en' => 'Good Friday',
                    'ar' => 'Хорошей пятницы'
                ],
                'slug' => \Illuminate\Support\Str::slug('Good Friday'),
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
                    'ar' => 'С годовщиной'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy anniversary'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Happy birthday',
                    'ar' => 'День рождения'
                ],'',
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
//            [
//                'title' => [
//                    'en' => 'Juneteenth',
//                    'ar' => 'Juneteenth'
//                ],
//                'name' => [
//                    'en' => 'Juneteenth',
//                    'ar' => 'Juneteenth'
//                ],
//                'slug' => \Illuminate\Support\Str::slug('Juneteenth'),
//                'is_published' => false,
//            ],
            [
                'title' => [
                    'en' => 'Labor Day',
                    'ar' => 'День благодарения'
                ],
                'name' => [
                    'en' => 'Labor Day',
                    'ar' => 'День благодарения'
                ],
                'slug' => \Illuminate\Support\Str::slug('Labor Day'),
                'is_published' => true,
            ],
//            [
//                'title' => [
//                    'en' => 'Martin Luther King Jr. Day',
//                    'ar' => 'Martin Luther King Jr. Day'
//                ],
//                'name' => [
//                    'en' => 'Martin Luther King Jr. Day',
//                    'ar' => 'Martin Luther King Jr. Day'
//                ],
//                'slug' => \Illuminate\Support\Str::slug('Martin Luther King Jr. Day'),
//                'is_published' => false,
//            ],
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
                'is_published' => false,
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
                    'en' => 'New Business',
                    'ar' => 'Новый бизнес'
                ],
                'name' => [
                    'en' => 'New Business',
                    'ar' => 'Новый бизнес'
                ],
                'slug' => \Illuminate\Support\Str::slug('New Business'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New Year’s Day',
                    'ar' => 'Новый год'
                ],
                'name' => [
                    'en' => 'New Year’s Day',
                    'ar' => 'Новый Год'
                ],
                'slug' => \Illuminate\Support\Str::slug('New Year’s Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Newborn',
                    'ar' => 'Рождение'
                ],
                'name' => [
                    'en' => 'Newborn',
                    'ar' => 'Рождение'
                ],
                'slug' => \Illuminate\Support\Str::slug('Newborn'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Promotion',
                    'ar' => 'Повышение'
                ],
                'name' => [
                    'en' => 'Promotion',
                    'ar' => 'Повышение'
                ],
                'slug' => \Illuminate\Support\Str::slug('Promotion'),
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
                    'en' => 'Valentine’s Day',
                    'ar' => 'День валентина'
                ],
                'name' => [
                    'en' => 'Valentine’s Day',
                    'ar' => 'День Валентина'
                ],
                'slug' => \Illuminate\Support\Str::slug('Valentine’s Day'),
                'is_published' => true,
            ],
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
                'is_published' => false,
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
            ]
        ];

        foreach(\App\Models\UserImportantDateType::all() as $importantType){
            $importantType->delete();
        }

        foreach($categories as $category){
            $userCongratData = [
                'is_published' => true,
            ];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $userCongratData[$localeKey] = [
                    'title' => $category['title'][$localeKey],
                    'name' => $category['name'][$localeKey],
                ];
            }
            \App\Models\UserImportantDateType::updateOrCreate(
                [
                    'slug' => $category['slug']
                ], $userCongratData);
        }
    }
}
