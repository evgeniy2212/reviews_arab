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
                    'en' => 'اليوم الوطني السعودي',
                    'ar' => 'اليوم الوطني السعودي'
                ],
                'name' => [
                    'en' => 'اليوم الوطني السعودي',
                    'ar' => 'اليوم الوطني السعودي'
                ],
                'slug' => \Illuminate\Support\Str::slug('Saudi National Day'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Engagements',
                    'ar' => 'الخطوبة'
                ],
                'name' => [
                    'en' => 'Engagements',
                    'ar' => 'الخطوبة'
                ],
                'slug' => \Illuminate\Support\Str::slug('Engagements'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Graduation',
                    'ar' => 'التخرج من المدرسة الثانوية'
                ],
                'name' => [
                    'en' => 'Graduation',
                    'ar' => 'التخرج من المدرسة الثانوية'
                ],
                'slug' => \Illuminate\Support\Str::slug('Graduation'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Happy anniversary',
                    'ar' => 'ذكرى سنوية سعيدة'
                ],
                'name' => [
                    'en' => 'Happy anniversary',
                    'ar' => 'ذكرى سنوية سعيدة'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy anniversary'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Happy birthday',
                    'ar' => 'عيد ميلاد'
                ],
                'name' => [
                    'en' => 'Happy birthday',
                    'ar' => 'عيد ميلاد'
                ],
                'slug' => \Illuminate\Support\Str::slug('Happy birthday'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New born',
                    'ar' => 'ميلاد سعيد'
                ],
                'name' => [
                    'en' => 'New born',
                    'ar' => 'ميلاد سعيد'
                ],
                'slug' => \Illuminate\Support\Str::slug('New born'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New home',
                    'ar' => 'حفلة الإنتقال'
                ],
                'name' => [
                    'en' => 'New home',
                    'ar' => 'حفلة الإنتقال'
                ],
                'slug' => \Illuminate\Support\Str::slug('New home'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'New year',
                    'ar' => 'سنة جديدة'
                ],
                'name' => [
                    'en' => 'New year',
                    'ar' => 'سنة جديدة'
                ],
                'slug' => \Illuminate\Support\Str::slug('New year'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Promotion',
                    'ar' => 'ترقية وظيفية'
                ],
                'name' => [
                    'en' => 'Promotion',
                    'ar' => 'ترقية وظيفية'
                ],
                'slug' => \Illuminate\Support\Str::slug('Promotion'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Starting a new business',
                    'ar' => 'ابدأ مشروعًا جديدًا'
                ],
                'name' => [
                    'en' => 'Starting a new business',
                    'ar' => 'ابدأ مشروعًا جديدًا'
                ],
                'slug' => \Illuminate\Support\Str::slug('Starting a new business'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'Wedding',
                    'ar' => 'قران'
                ],
                'name' => [
                    'en' => 'Wedding',
                    'ar' => 'قران'
                ],
                'slug' => \Illuminate\Support\Str::slug('Wedding'),
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
