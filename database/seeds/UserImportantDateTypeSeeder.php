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
            [ 'title' => [
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
                    'en' => 'ذكرى سنوية سعيدة',
                    'ar' => 'ذكرى سنوية سعيدة'
                ],
                'name' => [
                    'en' => 'ذكرى سنوية سعيدة',
                    'ar' => 'ذكرى سنوية سعيدة'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy Anniversary'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'عيد ميلاد سعيد',
                    'ar' => 'عيد ميلاد سعيد'
                ],
                'name' => [
                    'en' => 'عيد ميلاد سعيد',
                    'ar' => 'عيد ميلاد سعيد'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy Birthday'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'مولود جديد',
                    'ar' => 'مولود جديد'
                ],
                'name' => [
                    'en' => 'مولود جديد',
                    'ar' => 'مولود جديد'
                ],
                'slug' => \Illuminate\Support\Str::slug('New Born'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'مولود جديد',
                    'ar' => 'مولود جديد'
                ],
                'name' => [
                    'en' => 'سنة جديدة',
                    'ar' => 'سنة جديدة'
                ],
                'slug' => \Illuminate\Support\Str::slug('New Year'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'مولود جديد',
                    'ar' => 'مولود جديد'
                ],
                'name' => [
                    'en' => 'بدأ مشروع جديد',
                    'ar' => 'بدأ مشروع جديد'
                ],
                'slug' => \Illuminate\Support\Str::slug('Starting a new business'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'زواج',
                    'ar' => 'زواج'
                ],
                'name' => [
                    'en' => 'زواج',
                    'ar' => 'زواج'
                ],
                'slug' => \Illuminate\Support\Str::slug('Wedding'),
                'is_published' => true,
            ],

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
