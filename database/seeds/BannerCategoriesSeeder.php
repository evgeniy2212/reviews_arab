<?php

use Illuminate\Database\Seeder;
use App\Models\BannerCategory;

class BannerCategoriesSeeder extends Seeder
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
                    'en' => 'CONGRATULATION',
                    'ar' => 'الجميع'
                ],
                'slug' => \Illuminate\Support\Str::slug('congratulation'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'THANK YOU NOTE',
                    'ar' => 'شكرا لك ملاحظة'
                ],
                'slug' => \Illuminate\Support\Str::slug('thank you note'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'SELLING',
                    'ar' => 'يبيع'
                ],
                'slug' => \Illuminate\Support\Str::slug('selling'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'BUSINESS SERVICE AD',
                    'ar' => 'إعلان خدمة الأعمال'
                ],
                'slug' => \Illuminate\Support\Str::slug('business service ad'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'REVIEW',
                    'ar' => 'المراجعات'
                ],
                'slug' => \Illuminate\Support\Str::slug('review'),
                'is_published' => true,
            ],
            [
                'title' => [
                    'en' => 'OTHER',
                    'ar' => 'وجبات خفيفة وحلويات'
                ],
                'slug' => \Illuminate\Support\Str::slug('other'),
                'is_published' => true,
            ],
        ];

        foreach($categories as $category){
            $data = [
                'is_published' => $category['is_published']
            ];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $data[$localeKey] = [
                    'title' => \Illuminate\Support\Arr::get($category['title'], $localeKey, app('laravellocalization')->getDefaultLocale())
                ];
            }
            BannerCategory::updateOrCreate([
                'slug' => $category['slug']
            ], $data);
        }
    }
}
