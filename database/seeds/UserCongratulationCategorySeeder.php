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
                    'en' => 'يوم عرفة',
                    'ar' => 'يوم عرفة'
                ],
                'name' => [
                    'en' => 'يوم عرفة',
                    'ar' => 'يوم عرفة'
                ],
                'slug' => \Illuminate\Support\Str::slug('ARAFFA day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'عيد المولد النبوي',
                    'ar' => 'عيد المولد النبوي'
                ],
                'name' => [
                    'en' => 'عيد المولد النبوي',
                    'ar' => 'عيد المولد النبوي'
                ],
                'slug' => \Illuminate\Support\Str::slug('Prophets Birthday'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'عيد الفطر المبارك',
                    'ar' => 'عيد الفطر المبارك'
                ],
                'name' => [
                    'en' => 'عيد الفطر المبارك',
                    'ar' => 'عيد الفطر المبارك'
                ],
                'slug' => \Illuminate\Support\Str::slug('Eid al-Fitr'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'وقفة عيد الفطر',
                    'ar' => 'وقفة عيد الفطر'
                ],
                'name' => [
                    'en' => 'وقفة عيد الفطر',
                    'ar' => 'وقفة عيد الفطر'
                ],
                'slug' => \Illuminate\Support\Str::slug('Eid al-Fitr pause'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'عيد الأضحى المبارك',
                    'ar' => 'عيد الأضحى المبارك'
                ],
                'name' => [
                    'en' => 'عيد الأضحى المبارك',
                    'ar' => 'عيد الأضحى المبارك'
                ],
                'slug' => \Illuminate\Support\Str::slug('Eid al-Adha'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'وقفة عيد الأضحى',
                    'ar' => 'وقفة عيد الأضحى'
                ],
                'name' => [
                    'en' => 'وقفة عيد الأضحى',
                    'ar' => 'وقفة عيد الأضحى'
                ],
                'slug' => \Illuminate\Support\Str::slug('Eid al-Adha pause'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'رأس السنة الهجرية',
                    'ar' => 'رأس السنة الهجرية'
                ],
                'name' => [
                    'en' => 'رأس السنة الهجرية',
                    'ar' => 'رأس السنة الهجرية'
                ],
                'slug' => \Illuminate\Support\Str::slug('Islamic New Year'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Birthday of Martin Luther King Jr.',
                    'ar' => 'День рождения Мартина Лютера Кинга-младшего.'
                ],
                'name' => [
                    'en' => 'اليوم الوطني السعودي',
                    'ar' => 'اليوم الوطني السعودي'
                ],
                'slug' => \Illuminate\Support\Str::slug('Saudi National Day'),
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
