<?php

use Illuminate\Database\Seeder;

use App\Models\CategoryByReview;
use App\Models\GroupByReview;
use App\Models\ReviewCategory;

class CategoryGroupByReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Convenience products' => [
                'title' => [
                    'en' => 'Convenience products',
                    'ar' => 'منتجات استهلاكية'
                ],
                'categories' => [
                    'Alcohol' => [
                        'en' => 'Alcohol',
                        'ar' => 'كحول'
                    ],
                    'Cigarettes' => [
                        'en' => 'Cigarettes',
                        'ar' => 'سجائر'
                    ],
                    'Fruit' => [
                        'en' => 'Fruit',
                        'ar' => 'فاكهة'
                    ],
                    'Most food items' => [
                        'en' => 'Most food items',
                        'ar' => 'معظم المواد الغذائية'
                    ],
                    'Snack foods and candy bars' => [
                        'en' => 'Snack foods and candy bars',
                        'ar' => 'وجبات خفيفة وحلويات'
                    ],
                    'Soft drinks' => [
                        'en' => 'Soft drinks',
                        'ar' => 'مشروبات غازية'
                    ],
                    'Vegetables' => [
                        'en' => 'Vegetables',
                        'ar' => 'خضروات'
                    ],
                    'Other' => [
                        'en' => 'Other',
                        'ar' => 'أخرى'
                    ]
                ]
            ],
            'Shopping products' => [
                'title' => [
                    'en' => 'Shopping products',
                    'ar' => 'منتجات تسوق'
                ],
                'categories' => [
                    'Cameras' => [
                        'en' => 'Cameras',
                        'ar' => 'كاميرات'
                    ],
                    'Camping equipment' => [
                        'en' => 'Camping equipment',
                        'ar' => 'كاميرات'
                    ],
                    'Clothing' => [
                        'en' => 'Clothing',
                        'ar' => 'ملابس'
                    ],
                    'Electric Car' => [
                        'en' => 'Electric Car',
                        'ar' => 'سيارة كهربائية'
                    ],
                    'Electronics' => [
                        'en' => 'Electronics',
                        'ar' => 'إلكترونيات'
                    ],
                    'Furniture' => [
                        'en' => 'Furniture',
                        'ar' => 'أثاث'
                    ],
                    'Golf equipment' => [
                        'en' => 'Golf equipment',
                        'ar' => 'معدات الجولف'
                    ],
                    'Jewelry' => [
                        'en' => 'Jewelry',
                        'ar' => 'مجوهرات'
                    ],
                    'Kitchen equipment' => [
                        'en' => 'Kitchen equipment',
                        'ar' => 'أدوات مطبخ'
                    ],
                    'Luggage' => [
                        'en' => 'Luggage',
                        'ar' => 'حقائب سفر'
                    ],
                    'Mobile phones' => [
                        'en' => 'Mobile phones',
                        'ar' => 'هواتف محمولة'
                    ],
                    'Perfumes and cosmetics' => [
                        'en' => 'Perfumes and cosmetics',
                        'ar' => 'عطور ومستحضرات تجميل'
                    ],
                    'Plants' => [
                        'en' => 'Plants',
                        'ar' => 'نباتات'
                    ],
                    'Sporting equipment' => [
                        'en' => 'Sporting equipment',
                        'ar' => 'معدات رياضية'
                    ],
                    'Tools' => [
                        'en' => 'Tools',
                        'ar' => 'أدوات'
                    ],
                    'Toys' => [
                        'en' => 'Toys',
                        'ar' => 'ألعاب اطفال'
                    ],
                    'Washing machines and dishwashers' => [
                        'en' => 'Washing machines and dishwashers',
                        'ar' => 'غسالات وغسالات أطباق'
                    ],
                    'Other' => [
                        'en' => 'Other',
                        'ar' => 'وجبات خفيفة وحلويات'
                    ]
                ],
            ],
            'Specialty products' => [
                'title' => [
                    'en' => 'Specialty products',
                    'ar' => 'منتجات متخصصة'
                ],
                'categories' => [
                    'Book' => [
                        'en' => 'Book',
                        'ar' => 'كتب'
                    ],
                    'Cleaning & Detergents products' => [
                        'en' => 'Cleaning & Detergents products',
                        'ar' => 'مواد تنظيف'
                    ],
                    'Flowers' => [
                        'en' => 'Flowers',
                        'ar' => 'زهور'
                    ],
                    'Medicines and vitamins' => [
                        'en' => 'Medicines and vitamins',
                        'ar' => ' أدوية وفيتامينات'
                    ],
                    'Newspapers and magazines' => [
                        'en' => 'Newspapers and magazines',
                        'ar' => 'جرائد ومجلات'
                    ],
                    'Pet food' => [
                        'en' => 'Pet food',
                        'ar' => 'طعام حيوانات أليفة'
                    ],
                    'Solar Panel & Wind System' => [
                        'en' => 'Solar Panel & Wind System',
                        'ar' => 'أنظمة ألواح الطاقة الشمسية والرياح'
                    ],
                    'Toothpaste, soap, and shampoo' => [
                        'en' => 'Toothpaste, soap, and shampoo',
                        'ar' => 'معجون أسنان وصابون وشامبو'
                    ],
                    'TV Chanel' => [
                        'en' => 'TV Chanel',
                        'ar' => 'قنوات تلفزيونية'
                    ],
                    'Virtual Game' => [
                        'en' => 'Virtual Game',
                        'ar' => 'لعبة افتراضية'
                    ],
                    'Other' => [
                        'en' => 'Other',
                        'ar' => 'أخرى'
                    ]
                ],
            ],
            'City' => [
                'title' => [
                    'en' => 'City',
                    'ar' => 'رحلة بحرية'
                ],
            ],
            'Cruise' => [
                'title' => [
                    'en' => 'Cruise',
                    'ar' => 'رحلة بحرية'
                ],
            ],
            'Resort' => [
                'title' => [
                    'en' => 'Resort',
                    'ar' => 'منتجع'
                ],
            ],
            'Hotel' => [
                'title' => [
                    'en' => 'Hotel',
                    'ar' => 'فندق'
                ],
            ],
            'National parks' => [
                'title' => [
                    'en' => 'National parks',
                    'ar' => 'حديقة وطنية'
                ],
            ],
            'State parks' => [
                'title' => [
                    'en' => 'State parks',
                    'ar' => 'حديقة الولاية'
                ],
            ],
            'Beaches' => [
                'title' => [
                    'en' => 'Beaches',
                    'ar' => 'شواطئ'
                ],
            ],
            'Other' => [
                'title' => [
                    'en' => 'Other',
                    'ar' => 'أخرى'
                ],
            ],
        ];

        $reviewCategory = ReviewCategory::whereSlug('goods')->first();
        foreach($categories as $categoryName => $categoryData){
            $isNotRegionEmpty = \Illuminate\Support\Arr::has($categoryData, 'categories');
            $reviewCategoryId = $isNotRegionEmpty ? $reviewCategory->id : null;

            $data = [
                'review_category_id' => $reviewCategoryId
            ];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $data[$localeKey] = [
                    'name' => \Illuminate\Support\Arr::get($categoryData['title'], $localeKey, app('laravellocalization')->getDefaultLocale())
                ];
            }
            $category = CategoryByReview::create($data);
            if($isNotRegionEmpty){
                $groups = $categoryData['categories'];
                foreach($groups as $group){
                    $groupData = [
                        'category_id' => $category->id,
                    ];
                    foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                        $groupData[$localeKey] = [
                            'name' => \Illuminate\Support\Arr::get($group, $localeKey, app('laravellocalization')->getDefaultLocale())
                        ];
                    }
                    GroupByReview::create($groupData);
                }
            }
        }
    }
}
