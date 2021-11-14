<?php

use Illuminate\Database\Seeder;
use \App\Models\Region;
use \App\Models\Country;

class CountryRegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
//            'USA' => [
//                'name' => [
//                    'en' => 'USA',
//                    'ar' => 'США'
//                ],
//                'region_naming' => [
//                    'en' => 'State',
//                    'ar' => 'Штат'
//                ],
//                'regions' => [
//                    'Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming',
//                ],
//                'is_enable' => false
//            ],
//            'Australia' => [
//                'name' => [
//                    'en' => 'Australia',
//                    'ar' => 'Австралия'
//                ],
//                'region_naming' => [
//                    'en' => 'State',
//                    'ar' => 'Штат'
//                ],
//                'regions' => [
//                    'Queensland','New South Wales','Australian Capital Territory','Victoria','South Australia','Western Australia','Tasmania','Northern Territory',
//                ],
//                'is_enable' => false
//            ],
//            'United Kingdom' => [
//                'name' => [
//                    'en' => 'United Kingdom',
//                    'ar' => 'Великая Британия'
//                ],
//                'region_naming' => [
//                    'en' => 'Region',
//                    'ar' => 'Регион'
//                ],
//                'regions' => [
//                    'South East','London','North West','East of England','West Midlands','South West','Yorkshire and the Humber','East Midlands','North East',
//                ],
//                'is_enable' => false
//            ],
//            'India' => [
//                'name' => [
//                    'en' => 'India',
//                    'ar' => 'Индия'
//                ],
//                'region_naming' => [
//                    'en' => 'State',
//                    'ar' => 'Штат'
//                ],
//                'regions' => [
//                    'Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh','Goa','Gujarat','Haryana','Himachal Pradesh','Jharkhand','Karnataka','Kerala','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Odisha','Punjab','Rajasthan','Sikkim','Tamil Nadu','Telangana','Tripura','Uttar Pradesh','Uttarakhand','West Bengal',
//                ],
//                'is_enable' => false
//            ],
//            'Canada' => [
//                'name' => [
//                    'en' => 'Canada',
//                    'ar' => 'Канада'
//                ],
//                'region_naming' => [
//                    'en' => 'Province',
//                    'ar' => 'Провинция'
//                ],
//                'regions' => [
//                    'Alberta','British Columbia','Manitoba','New Brunswick','Newfoundland and Labrador','Northwest Territories','Nova Scotia','Nunavut','Ontario','Prince Edward Island','Quebec','Saskatchewan',
//                ],
//                'is_enable' => false
//            ],
//            'China' => [
//                'name' => [
//                    'en' => 'China',
//                    'ar' => 'Китай'
//                ],
//                'region_naming' => [
//                    'en' => 'Province',
//                    'ar' => 'Провинция'
//                ],
//                'regions' => [
//                    'Anhui','Fujian','Gansu','Guangdong','Guizhou','Hainan','Hebei','Heilongjiang','Henan','Hubei','Hunan','Jiangsu','Jiangxi','Jilin','Liaoning','Qinghai','Shaanxi','Shandong','Shanxi','Sichuan','Yunnan','Zhejiang','Guangxi','Inner Mongolia','Ningxia ','Xinjiang ','Tibet ','Beijing','Chongqing','Shanghai','Tianjin','Hong Kong','Macau',
//                ],
//                'is_enable' => false
//            ],
//            'Pakistan' => [
//                'name' => [
//                    'en' => 'Pakistan',
//                    'ar' => 'Пакистан'
//                ],
//                'region_naming' => [
//                    'en' => 'Province',
//                    'ar' => 'Провинция'
//                ],
//                'regions' => [
//                    'Sindh','Punjab','Khyber Pakhtunkhwa','Islamabad Capital Territory','Gilgit-Baltistan','Balochistan','Azad Kashmir',
//                ],
//                'is_enable' => false
//            ],
//            'South Africa' => [
//                'name' => [
//                    'en' => 'South Africa',
//                    'ar' => 'ЮАР'
//                ],
//                'region_naming' => [
//                    'en' => 'Province',
//                    'ar' => 'Провинция'
//                ],
//                'regions' => [
//                    'Eastern Cape','Free State','Gauteng','KwaZulu-Natal','Limpopo','Mpumalanga','North West','Northern Cape','Western Cape',
//                ],
//                'is_enable' => false
//            ],
            'المملكة العربية السعودية' => [
                'name' => [
                    'en' => 'Saudi Arabia',
                    'ar' => 'المملكة العربية السعودية'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'الباحة','الجوف','القصيم','عسير','المنطقة الشرقية','منطقة حائل','جيزان','المدينة المنورة','مكه','نجران','منطقة الحدود الشمالية','الرياض','تبوك'
                ],
                'is_enable' => true
            ],
//            'Afghanistan' => [
//                'is_enable' => false
//            ],
            'أفغانستان' =>  ['is_enable' => true] , 'ألبانيا' =>  ['is_enable' => true] , 'الجزائر' =>  ['is_enable' => true] , 'أندورا' =>  ['is_enable' => true] , 'أنغولا' =>  ['is_enable' => true] , 'أنتيغوا وبربودا' =>  ['is_enable' => true] , 'الأرجنتين' =>  ['is_enable' => true] , 'أرمينيا' =>  ['is_enable' => true] , 'أستراليا' =>  ['is_enable' => true] , 'النمسا' =>  ['is_enable' => true] , 'أذربيجان' =>  ['is_enable' => true] , 'جزر البهاما' =>  ['is_enable' => true] , 'البحرين' =>  ['is_enable' => true] , 'بنغلاديش' =>  ['is_enable' => true] , 'بربادوس' =>  ['is_enable' => true] , 'بيلاروسيا' =>  ['is_enable' => true] , 'بلجيكا' =>  ['is_enable' => true] , 'بليز' =>  ['is_enable' => true] , 'بنين' =>  ['is_enable' => true] , 'بوتان' =>  ['is_enable' => true] , 'بوليفيا' =>  ['is_enable' => true] , 'البوسنة والهرسك' =>  ['is_enable' => true] , 'بوتسوانا' =>  ['is_enable' => true] , 'البرازيل' =>  ['is_enable' => true] , 'بروناي' =>  ['is_enable' => true] , 'بلغاريا' =>  ['is_enable' => true] , 'بوركينا فاسو' =>  ['is_enable' => true] , 'بوروندي' =>  ['is_enable' => true] , 'كابو فيردي' =>  ['is_enable' => true] , 'كمبوديا' =>  ['is_enable' => true] , 'الكاميرون' =>  ['is_enable' => true] , 'كندا' =>  ['is_enable' => true] , 'جمهورية إفريقيا الوسطى (CAR)' =>  ['is_enable' => true] , 'تشاد' =>  ['is_enable' => true] , 'تشيلي' =>  ['is_enable' => true] , 'الصين' =>  ['is_enable' => true] , 'كولومبيا' =>  ['is_enable' => true] , 'جزر القمر' =>  ['is_enable' => true] , 'جمهورية الكونغو الديمقراطية' =>  ['is_enable' => true] , 'جمهورية الكونغو' =>  ['is_enable' => true] , 'كوستا ريكا' =>  ['is_enable' => true] , 'كوت ديفوار' =>  ['is_enable' => true] , 'كرواتيا' =>  ['is_enable' => true] , 'كوبا' =>  ['is_enable' => true] , 'قبرص' =>  ['is_enable' => true] , 'التشيك' =>  ['is_enable' => true] , 'الدنمارك' =>  ['is_enable' => true] , 'جيبوتي' =>  ['is_enable' => true] , 'دومينيكا' =>  ['is_enable' => true] , 'جمهورية الدومينيكان' =>  ['is_enable' => true] , '' =>  ['is_enable' => true] , 'الاكوادور' =>  ['is_enable' => true] , 'مصر' =>  ['is_enable' => true] , 'السلفادور' =>  ['is_enable' => true] , 'غينيا الإستوائية' =>  ['is_enable' => true] , 'إريتريا' =>  ['is_enable' => true] , 'إستونيا' =>  ['is_enable' => true] , 'إيسواتيني' =>  ['is_enable' => true] , 'أثيوبيا' =>  ['is_enable' => true] , 'فيجي' =>  ['is_enable' => true] , 'فنلندا' =>  ['is_enable' => true] , 'فرنسا' =>  ['is_enable' => true] , 'الجابون' =>  ['is_enable' => true] , 'غامبيا' =>  ['is_enable' => true] , 'جورجيا' =>  ['is_enable' => true] , 'ألمانيا' =>  ['is_enable' => true] , 'غانا' =>  ['is_enable' => true] , 'اليونان' =>  ['is_enable' => true] , 'غرينادا' =>  ['is_enable' => true] , 'غواتيمالا' =>  ['is_enable' => true] , 'غينيا' =>  ['is_enable' => true] , 'غينيا بيساو' =>  ['is_enable' => true] , 'غيانا' =>  ['is_enable' => true] , 'هايتي' =>  ['is_enable' => true] , 'هندوراس' =>  ['is_enable' => true] , 'هنغاريا' =>  ['is_enable' => true] , 'أيسلندا' =>  ['is_enable' => true] , 'الهند' =>  ['is_enable' => true] , 'إندونيسيا' =>  ['is_enable' => true] , 'إيران' =>  ['is_enable' => true] , 'العراق' =>  ['is_enable' => true] , 'أيرلندا' =>  ['is_enable' => true] , 'إسرائيل' =>  ['is_enable' => true] , 'إيطاليا' =>  ['is_enable' => true] , 'جامايكا' =>  ['is_enable' => true] , 'اليابان' =>  ['is_enable' => true] , 'الأردن' =>  ['is_enable' => true] , 'كازاخستان' =>  ['is_enable' => true] , 'كينيا' =>  ['is_enable' => true] , 'كيريباتي' =>  ['is_enable' => true] , 'كوسوفو' =>  ['is_enable' => true] , 'الكويت' =>  ['is_enable' => true] , 'قيرغيزستان' =>  ['is_enable' => true] , 'لاوس' =>  ['is_enable' => true] , 'لاتفيا' =>  ['is_enable' => true] , 'لبنان' =>  ['is_enable' => true] , 'ليسوتو' =>  ['is_enable' => true] , 'ليبيريا' =>  ['is_enable' => true] , 'ليبيا' =>  ['is_enable' => true] , 'ليختنشتاين' =>  ['is_enable' => true] , 'ليتوانيا' =>  ['is_enable' => true] , 'لوكسمبورغ' =>  ['is_enable' => true] , 'مدغشقر' =>  ['is_enable' => true] , 'ملاوي' =>  ['is_enable' => true] , 'ماليزيا' =>  ['is_enable' => true] , 'جزر المالديف' =>  ['is_enable' => true] , 'مالي' =>  ['is_enable' => true] , 'مالطا' =>  ['is_enable' => true] , 'جزر مارشال' =>  ['is_enable' => true] , 'موريتانيا' =>  ['is_enable' => true] , 'موريشيوس' =>  ['is_enable' => true] , 'المكسيك' =>  ['is_enable' => true] , 'ميكرونيزيا' =>  ['is_enable' => true] , 'مولدوفا' =>  ['is_enable' => true] , 'موناكو' =>  ['is_enable' => true] , 'منغوليا' =>  ['is_enable' => true] , 'الجبل الأسود' =>  ['is_enable' => true] , 'المغرب' =>  ['is_enable' => true] , 'موزمبيق' =>  ['is_enable' => true] , 'ميانمار' =>  ['is_enable' => true] , 'ناميبيا' =>  ['is_enable' => true] , 'ناورو' =>  ['is_enable' => true] , 'نيبال' =>  ['is_enable' => true] , 'هولندا' =>  ['is_enable' => true] , 'نيوزيلاندا' =>  ['is_enable' => true] , 'نيكاراغوا' =>  ['is_enable' => true] , 'النيجر' =>  ['is_enable' => true] , 'نيجيريا' =>  ['is_enable' => true] , 'كوريا الشمالية' =>  ['is_enable' => true] , 'مقدونيا الشمالية' =>  ['is_enable' => true] , 'النرويج' =>  ['is_enable' => true] , 'سلطنة عمان' =>  ['is_enable' => true] , 'باكستان' =>  ['is_enable' => true] , 'بالاو' =>  ['is_enable' => true] , 'فلسطين' =>  ['is_enable' => true] , 'بنما' =>  ['is_enable' => true] , 'بابوا غينيا الجديدة' =>  ['is_enable' => true] , 'باراغواي' =>  ['is_enable' => true] , 'بيرو' =>  ['is_enable' => true] , 'فيلبيني' =>  ['is_enable' => true] , 'بولندا' =>  ['is_enable' => true] , 'البرتغال' =>  ['is_enable' => true] , 'دولة قطر' =>  ['is_enable' => true] , 'رومانيا' =>  ['is_enable' => true] , 'روسيا' =>  ['is_enable' => true] , 'رواندا' =>  ['is_enable' => true] , 'سانت كيتس ونيفيس' =>  ['is_enable' => true] , 'القديسة لوسيا' =>  ['is_enable' => true] , 'سانت فنسنت وجزر غرينادين' =>  ['is_enable' => true] , 'ساموا' =>  ['is_enable' => true] , 'سان مارينو' =>  ['is_enable' => true] , 'ساو تومي وبرينسيبي' =>  ['is_enable' => true] , 'السنغال' =>  ['is_enable' => true] , 'صربيا' =>  ['is_enable' => true] , 'سيشيل' =>  ['is_enable' => true] , 'سيرا ليون' =>  ['is_enable' => true] , 'سنغافورة' =>  ['is_enable' => true] , 'سلوفاكيا' =>  ['is_enable' => true] , 'سلوفينيا' =>  ['is_enable' => true] , 'جزر سليمان' =>  ['is_enable' => true] , 'الصومال' =>  ['is_enable' => true] , 'جنوب أفريقيا' =>  ['is_enable' => true] , 'كوريا الجنوبية' =>  ['is_enable' => true] , 'جنوب السودان' =>  ['is_enable' => true] , 'إسبانيا' =>  ['is_enable' => true] , 'سيريلانكا' =>  ['is_enable' => true] , 'السودان' =>  ['is_enable' => true] , 'سورينام' =>  ['is_enable' => true] , 'السويد' =>  ['is_enable' => true] , 'سويسرا' =>  ['is_enable' => true] , 'سوريا' =>  ['is_enable' => true] , 'تايوان' =>  ['is_enable' => true] , 'طاجيكستان' =>  ['is_enable' => true] , 'تنزانيا' =>  ['is_enable' => true] , 'تايلاند' =>  ['is_enable' => true] , 'تيمور ليشتي' =>  ['is_enable' => true] , 'توجو' =>  ['is_enable' => true] , 'تونغا' =>  ['is_enable' => true] , 'ترينداد وتوباغو' =>  ['is_enable' => true] , 'تونس' =>  ['is_enable' => true] , 'ديك رومى' =>  ['is_enable' => true] , 'تركمانستان' =>  ['is_enable' => true] , 'توفالو' =>  ['is_enable' => true] , 'أوغندا' =>  ['is_enable' => true] , 'أوكرانيا' =>  ['is_enable' => true] , 'الإمارات العربية المتحدة' =>  ['is_enable' => true] , 'المملكة المتحدة' =>  ['is_enable' => true] , 'الولايات المتحدة الأمريكية' =>  ['is_enable' => true] , 'أوروغواي' =>  ['is_enable' => true] , 'أوزبكستان' =>  ['is_enable' => true] , 'فانواتو' =>  ['is_enable' => true] , 'مدينة الفاتيكان' =>  ['is_enable' => true] , 'فنزويلا' =>  ['is_enable' => true] , 'فيتنام' =>  ['is_enable' => true] , 'اليمن' =>  ['is_enable' => true] , 'زامبيا' =>  ['is_enable' => true] , 'زيمبابوي'  =>  ['is_enable' => true]
        ];

        foreach($countries as $countryName => $countryData){
            $slug = \Illuminate\Support\Str::slug($countryName);
            $country = Country::firstOrCreate(['slug' => $slug]);
            $transData = [];
            foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                $naming = $countryName;
                if(\Illuminate\Support\Arr::has($countryData, 'name')){
                    $naming = \Illuminate\Support\Arr::get($countryData['name'], $localeKey, app('laravellocalization')->getDefaultLocale());
                }
                $transData[$localeKey] = [
                    'country' => $naming
                ];
            }
            $transData['is_enable'] = $countryData['is_enable'];
            Country::updateOrCreate(
                [
                    'slug' => $slug
                ],
                $transData);
            $regions = \Illuminate\Support\Arr::has($countryData, 'regions')
                ?  \Illuminate\Support\Arr::get($countryData, 'regions')
                : [];
            if(!empty($regions)){
                foreach($regions as $regionName){
                    $slug = \Illuminate\Support\Str::slug($regionName);
                    $region = Region::firstOrCreate(['slug' => $slug, 'country_id' => $country->id]);
                    $transRegionData = [];
                    foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                        $naming = $regionName;
//                        if(\Illuminate\Support\Arr::has($countryData, 'name')){
//                            $naming = \Illuminate\Support\Arr::get($countryData['name'], $localeKey, app('laravellocalization')->getDefaultLocale());
//                        }
                        $regionNaming = 'Region';
                        if(\Illuminate\Support\Arr::has($countryData, 'region_naming')){
                            $regionNaming = \Illuminate\Support\Arr::get($countryData['region_naming'], $localeKey, app('laravellocalization')->getDefaultLocale());
                        }
                        $transRegionData[$localeKey] = [
                            'region' => $naming,
                            'region_naming' => $regionNaming
                        ];
                    }

                    Region::updateOrCreate(
                        [
                            'slug' => $slug,
                            'country_id' => $country->id
                        ],
                        $transRegionData
                    );
                }
            }
        }
    }
}
