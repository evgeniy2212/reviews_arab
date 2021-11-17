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
                    'الرياض', 'مكه', 'المدينة المنورة', 'قاسم', 'الشرقية', 'عسير', 'تبوك', 'وابل', 'الحدود الشمالية', 'جيزان', 'نجران', 'الباحة', 'الجوف'
                ],
                'is_enable' => true
            ],
            'الجزائر' => [
                'name' => [
                    'en' => 'Algeria',
                    'ar' => 'الجزائر'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'أدرار', 'الشلف', 'الأغواط', 'أم البواقي', 'باتنة', 'بجاية', 'بسكرة', 'بشار', 'البليدة', 'البويرة', 'تمنراست', 'تبسة', 'تلمسان', 'تيارت', 'تيزي وزو', 'الجزائر', 'الجلفة', 'جيجل', 'سطيف', 'سعيدة', 'سكيكدة', 'سيدي بلعباس', 'عنابة', 'قالمة', 'قسنطينة', 'المدية', 'مستغانم', 'المسيلة', 'معسكر', 'ورقلة', 'وهران', 'البيض', 'اليزي', 'برج  بوعريريج', 'بومرداس', 'الطارف', 'تندوف', 'تسمسيلت', 'الوادي', 'خنشلة', 'سو  أهراس', 'تيبازة', 'ميلة', '"عين الدفلى	"', 'النعامة', 'عين تموشنت', '"غرداية	"', 'غليزان', 'المغير', 'المنيعة', 'أولاد جلال', 'برج باجي  مختار', 'بني عباس', 'تيميمون', 'تقرت', 'جانت', 'عين صالح', 'عين قزّام'
                ],
                'is_enable' => true
            ],
            'البحرين' => [
                'name' => [
                    'en' => 'Bahrain',
                    'ar' => 'البحرين'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'محافظة المنامة', 'محافظة المحرق', 'المحافظة الشّمالية', 'المحافظة الجنوبيّة'
                ],
                'is_enable' => true
            ],
            'مصر' => [
                'name' => [
                    'en' => 'Egypt',
                    'ar' => 'مصر'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'الإسكندرية', 'أسيوط', 'أسوان', 'البحيرة', 'بني سويف', 'القاهرة', 'الدقهلية', 'دمياط', 'الفيوم', 'الغربية', 'الجيزة', 'حلوان', 'الإسماعيلية', 'كفر الشيخ', 'الأقصر', 'مرسى مطروح', 'المنيا', 'المنوفية', 'الوادي الجديد', 'شمال سيناء', 'بورسعيد', 'القليوبية', 'قنا', 'البحر الاحمر', 'الشرقية', 'سوهاج', 'جنوب سيناء', 'السويس', 'طنطا'
                ],
                'is_enable' => true
            ],
            'العراق' => [
                'name' => [
                    'en' => 'Iraq',
                    'ar' => 'العراق'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'بغداد', 'البصره', 'العماره', 'الرمادي', 'الناصريه', 'تكريت', 'السماوه', 'كربلاء', 'الحله', 'الموصل', 'النجف', 'الديوانيه', 'بعقوبه', 'أربيل', 'الكوت', 'دهوك', 'كركوك', 'السليمانيه'
                ],
                'is_enable' => true
            ],
            'الأردن' => [
                'name' => [
                    'en' => 'Jordan',
                    'ar' => 'الأردن'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'العاصمة', 'اربد', 'البلقاء', 'الكرك', 'معان', 'الزرقاء', 'المفرق', 'الطفيلة', 'مادبا', 'جرش', 'عجلون', 'العقبة'
                ],
                'is_enable' => true
            ],
            'اليمن' => [
                'name' => [
                    'en' => 'Yemen',
                    'ar' => 'اليمن'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'عمران', 'محافظة البيضاء', 'الحديدة', 'أجوف', 'المحويت', 'أمانة العاصمة', 'ذمار', 'دعوى', 'أب', 'مأرب', 'محافظة ريمة', 'صعدة', 'صنعاء', 'تعز', 'عدن', 'أبين', 'محافظة الضالع', 'ماهر', 'حضرموت', 'أرخبيل سقطرى', 'الحج', 'شبوة'
                ],
                'is_enable' => true
            ],
            'دولة قطر' => [
                'name' => [
                    'en' => 'Qatar',
                    'ar' => 'دولة قطر'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'الشمال', 'الخور', 'الشحانية', 'أم صلال', 'الضعاين', 'الدوحة', 'الريان', 'الوكرة'
                ],
                'is_enable' => true
            ],
            'الكويت' => [
                'name' => [
                    'en' => 'Kuwait',
                    'ar' => 'الكويت'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'العاصمة', 'حولي', 'الأحمدي', 'الجهراء', 'الفروانية', 'مبارك الكبير'
                ],
                'is_enable' => true
            ],
            'لبنان' => [
                'name' => [
                    'en' => 'Lebanon',
                    'ar' => 'لبنان'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'محافظة بيروت', 'عكار', 'جبل لبنان', 'بعلبك - الهرمل', 'البقاع', 'النبطية', 'شمال لبنان', 'جنوب لبنان'
                ],
                'is_enable' => true
            ],
            'ليبيا' => [
                'name' => [
                    'en' => 'Libya',
                    'ar' => 'ليبيا'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'البيضاء', 'الخمس', 'أوباري', 'الزاوية', 'بنغازي', 'درنة', 'الجبل الغربي', 'مصراتة', 'سبها', 'طرابلس'
                ],
                'is_enable' => true
            ],
            'موريتانيا' => [
                'name' => [
                    'en' => 'Mauritania',
                    'ar' => 'موريتانيا'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'أدرار', 'لعصابة', 'لبراكنة', 'داخلة نواذيبو', 'كوركول', 'غيديماغا', 'الحوض  الشرقي', 'الحوض الغربي', 'إينشيري', 'نواكشوط  الشمالية', 'نواكشوط الغربية', 'نواكشوط  الجنوبية', 'تكانت', 'تيرس زمور', 'الترارزه'
                ],
                'is_enable' => true
            ],
            'المغرب' => [
                'name' => [
                    'en' => 'Morocco',
                    'ar' => 'المغرب'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'طنجة تطوان الحسيمة', 'لورينتال', 'فاس مكناس', 'الرباط - سلا - القنيطرة', 'بني ملال خنيفرة', 'الدار البيضاء سطات', 'مراكش آسفي', 'درعة تافيلالت', 'سوس ماسة', 'كلميم واد نون', 'العيون - الساقية الحمراء', 'الداخلة - واد الذهب'
                ],
                'is_enable' => true
            ],
            'الإمارات العربية المتحدة (الإمارات العربية المتحدة)' => [
                'name' => [
                    'en' => 'United Arab Emirates (UAE)',
                    'ar' => 'الإمارات العربية المتحدة (الإمارات العربية المتحدة)'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'أبو ظبي', 'عجمان', 'دبي', 'الفجيرة', 'رأس  الخيمة', 'الشارقة', 'أم القيوين'
                ],
                'is_enable' => true
            ],
            'سلطنة عمان' => [
                'name' => [
                    'en' => 'Oman',
                    'ar' => 'سلطنة عمان'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'منطقة الداخلية', 'منطقة الظاهرة', 'محافظة شمال الباطنة', 'محافظة جنوب الباطنة', 'محافظة البريمي', 'المنطقة الوسطى', 'محافظة شمال الشرقية', 'محافظة جنوب الشرقية', 'محافظة ظفار', 'محافظة مسقط', 'محافظة مسندم'
                ],
                'is_enable' => true
            ],
            'فلسطين' => [
                'name' => [
                    'en' => 'Palestine',
                    'ar' => 'فلسطين'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'جنين', 'طوباس', 'طولكرم', 'نابلس', 'قلقيلية', 'سلفيت', 'رام الله والبيرة', 'أريحا', 'بيت المقدس', 'بيت لحم', 'الخليل'
                ],
                'is_enable' => true
            ],
            'السودان' => [
                'name' => [
                    'en' => 'Sudan',
                    'ar' => 'السودان'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'ولاية خرطوم', 'ولاية شمال كردفان', 'ولاية الشمالية', 'ولاية كسّلا', 'ولاية النيل الأزرق', 'ولاية شمال دارفور', 'ولاية جنوب دارفور', 'ولاية جنوب كردفان', 'ولاية الجزيرة', 'ولاية النيل الأبيض', 'ولاية نهر النيل', 'ولاية البحر الأحمر', 'ولاية القضارف', 'ولاية سنّار', 'ولاية غرب دارفور', 'ولاية وسط دارفور', 'ولاية شرق دارفور', 'ولاية غرب كردفان'
                ],
                'is_enable' => true
            ],
            'سوريا' => [
                'name' => [
                    'en' => 'Syria',
                    'ar' => 'سوريا'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'حلب', 'الرقة', 'السويداء', 'دمشق', 'درعا', 'دير الزور', 'حماه', 'الحسكة', 'حمص', 'إدلب', 'اللاذقية', 'القنيطرة', 'ريف دمشق', 'طرطوس'
                ],
                'is_enable' => true
            ],
            'تونس' => [
                'name' => [
                    'en' => 'Tunisia',
                    'ar' => 'تونس'
                ],
                'region_naming' => [
                    'en' => 'Province',
                    'ar' => 'مقاطعة'
                ],
                'regions' => [
                    'أريانة', 'باجة', 'بن عروس', 'بنزرت', 'قابس', 'قفصة', 'جندوبة', 'القيروان', 'القصرين', 'قبلي', 'الكاف', 'المهدية', 'منوبة', 'مدنين', 'المنستير', 'نابل', 'صفاقس', 'سيدي بوزيد', 'سليانة', 'سوسة', 'توزر', 'تطاوين', 'تونس', 'زغوان'
                ],
                'is_enable' => true
            ],

//            'Afghanistan' => [
//                'is_enable' => false
//            ],
            'أفغانستان' =>  ['is_enable' => true] , 'ألبانيا' =>  ['is_enable' => true] , 'أندورا' =>  ['is_enable' => true] , 'أنغولا' =>  ['is_enable' => true] , 'أنتيغوا وبربودا' =>  ['is_enable' => true] , 'الأرجنتين' =>  ['is_enable' => true] , 'أرمينيا' =>  ['is_enable' => true] , 'أستراليا' =>  ['is_enable' => true] , 'النمسا' =>  ['is_enable' => true] , 'أذربيجان' =>  ['is_enable' => true] , 'جزر البهاما' =>  ['is_enable' => true], 'بنغلاديش' =>  ['is_enable' => true] , 'بربادوس' =>  ['is_enable' => true] , 'بيلاروسيا' =>  ['is_enable' => true] , 'بلجيكا' =>  ['is_enable' => true] , 'بليز' =>  ['is_enable' => true] , 'بنين' =>  ['is_enable' => true] , 'بوتان' =>  ['is_enable' => true] , 'بوليفيا' =>  ['is_enable' => true] , 'البوسنة والهرسك' =>  ['is_enable' => true] , 'بوتسوانا' =>  ['is_enable' => true] , 'البرازيل' =>  ['is_enable' => true] , 'بروناي' =>  ['is_enable' => true] , 'بلغاريا' =>  ['is_enable' => true] , 'بوركينا فاسو' =>  ['is_enable' => true] , 'بوروندي' =>  ['is_enable' => true] , 'كابو فيردي' =>  ['is_enable' => true] , 'كمبوديا' =>  ['is_enable' => true] , 'الكاميرون' =>  ['is_enable' => true] , 'كندا' =>  ['is_enable' => true] , 'جمهورية إفريقيا الوسطى (CAR)' =>  ['is_enable' => true] , 'تشاد' =>  ['is_enable' => true] , 'تشيلي' =>  ['is_enable' => true] , 'الصين' =>  ['is_enable' => true] , 'كولومبيا' =>  ['is_enable' => true] , 'جزر القمر' =>  ['is_enable' => true] , 'جمهورية الكونغو الديمقراطية' =>  ['is_enable' => true] , 'جمهورية الكونغو' =>  ['is_enable' => true] , 'كوستا ريكا' =>  ['is_enable' => true] , 'كوت ديفوار' =>  ['is_enable' => true] , 'كرواتيا' =>  ['is_enable' => true] , 'كوبا' =>  ['is_enable' => true] , 'قبرص' =>  ['is_enable' => true] , 'التشيك' =>  ['is_enable' => true] , 'الدنمارك' =>  ['is_enable' => true] , 'جيبوتي' =>  ['is_enable' => true] , 'دومينيكا' =>  ['is_enable' => true] , 'جمهورية الدومينيكان' =>  ['is_enable' => true] , '' =>  ['is_enable' => true] , 'الاكوادور' =>  ['is_enable' => true], 'السلفادور' =>  ['is_enable' => true] , 'غينيا الإستوائية' =>  ['is_enable' => true] , 'إريتريا' =>  ['is_enable' => true] , 'إستونيا' =>  ['is_enable' => true] , 'إيسواتيني' =>  ['is_enable' => true] , 'أثيوبيا' =>  ['is_enable' => true] , 'فيجي' =>  ['is_enable' => true] , 'فنلندا' =>  ['is_enable' => true] , 'فرنسا' =>  ['is_enable' => true] , 'الجابون' =>  ['is_enable' => true] , 'غامبيا' =>  ['is_enable' => true] , 'جورجيا' =>  ['is_enable' => true] , 'ألمانيا' =>  ['is_enable' => true] , 'غانا' =>  ['is_enable' => true] , 'اليونان' =>  ['is_enable' => true] , 'غرينادا' =>  ['is_enable' => true] , 'غواتيمالا' =>  ['is_enable' => true] , 'غينيا' =>  ['is_enable' => true] , 'غينيا بيساو' =>  ['is_enable' => true] , 'غيانا' =>  ['is_enable' => true] , 'هايتي' =>  ['is_enable' => true] , 'هندوراس' =>  ['is_enable' => true] , 'هنغاريا' =>  ['is_enable' => true] , 'أيسلندا' =>  ['is_enable' => true] , 'الهند' =>  ['is_enable' => true] , 'إندونيسيا' =>  ['is_enable' => true] , 'إيران' =>  ['is_enable' => true], 'أيرلندا' =>  ['is_enable' => true] , 'إسرائيل' =>  ['is_enable' => true] , 'إيطاليا' =>  ['is_enable' => true] , 'جامايكا' =>  ['is_enable' => true] , 'اليابان' =>  ['is_enable' => true], 'كازاخستان' =>  ['is_enable' => true] , 'كينيا' =>  ['is_enable' => true] , 'كيريباتي' =>  ['is_enable' => true] , 'كوسوفو' =>  ['is_enable' => true], 'قيرغيزستان' =>  ['is_enable' => true] , 'لاوس' =>  ['is_enable' => true] , 'لاتفيا' =>  ['is_enable' => true], 'ليسوتو' =>  ['is_enable' => true] , 'ليبيريا' =>  ['is_enable' => true], 'ليختنشتاين' =>  ['is_enable' => true] , 'ليتوانيا' =>  ['is_enable' => true] , 'لوكسمبورغ' =>  ['is_enable' => true] , 'مدغشقر' =>  ['is_enable' => true] , 'ملاوي' =>  ['is_enable' => true] , 'ماليزيا' =>  ['is_enable' => true] , 'جزر المالديف' =>  ['is_enable' => true] , 'مالي' =>  ['is_enable' => true] , 'مالطا' =>  ['is_enable' => true] , 'جزر مارشال' =>  ['is_enable' => true], 'موريشيوس' =>  ['is_enable' => true] , 'المكسيك' =>  ['is_enable' => true] , 'ميكرونيزيا' =>  ['is_enable' => true] , 'مولدوفا' =>  ['is_enable' => true] , 'موناكو' =>  ['is_enable' => true] , 'منغوليا' =>  ['is_enable' => true] , 'الجبل الأسود' =>  ['is_enable' => true], 'موزمبيق' =>  ['is_enable' => true] , 'ميانمار' =>  ['is_enable' => true] , 'ناميبيا' =>  ['is_enable' => true] , 'ناورو' =>  ['is_enable' => true] , 'نيبال' =>  ['is_enable' => true] , 'هولندا' =>  ['is_enable' => true] , 'نيوزيلاندا' =>  ['is_enable' => true] , 'نيكاراغوا' =>  ['is_enable' => true] , 'النيجر' =>  ['is_enable' => true] , 'نيجيريا' =>  ['is_enable' => true] , 'كوريا الشمالية' =>  ['is_enable' => true] , 'مقدونيا الشمالية' =>  ['is_enable' => true] , 'النرويج' =>  ['is_enable' => true], 'باكستان' =>  ['is_enable' => true] , 'بالاو' =>  ['is_enable' => true], 'بنما' =>  ['is_enable' => true] , 'بابوا غينيا الجديدة' =>  ['is_enable' => true] , 'باراغواي' =>  ['is_enable' => true] , 'بيرو' =>  ['is_enable' => true] , 'فيلبيني' =>  ['is_enable' => true] , 'بولندا' =>  ['is_enable' => true] , 'البرتغال' =>  ['is_enable' => true], 'رومانيا' =>  ['is_enable' => true] , 'روسيا' =>  ['is_enable' => true] , 'رواندا' =>  ['is_enable' => true] , 'سانت كيتس ونيفيس' =>  ['is_enable' => true] , 'القديسة لوسيا' =>  ['is_enable' => true] , 'سانت فنسنت وجزر غرينادين' =>  ['is_enable' => true] , 'ساموا' =>  ['is_enable' => true] , 'سان مارينو' =>  ['is_enable' => true] , 'ساو تومي وبرينسيبي' =>  ['is_enable' => true] , 'السنغال' =>  ['is_enable' => true] , 'صربيا' =>  ['is_enable' => true] , 'سيشيل' =>  ['is_enable' => true] , 'سيرا ليون' =>  ['is_enable' => true] , 'سنغافورة' =>  ['is_enable' => true] , 'سلوفاكيا' =>  ['is_enable' => true] , 'سلوفينيا' =>  ['is_enable' => true] , 'جزر سليمان' =>  ['is_enable' => true] , 'الصومال' =>  ['is_enable' => true] , 'جنوب أفريقيا' =>  ['is_enable' => true] , 'كوريا الجنوبية' =>  ['is_enable' => true], 'إسبانيا' =>  ['is_enable' => true] , 'سيريلانكا' =>  ['is_enable' => true], 'سورينام' =>  ['is_enable' => true] , 'السويد' =>  ['is_enable' => true] , 'سويسرا' =>  ['is_enable' => true], 'تايوان' =>  ['is_enable' => true] , 'طاجيكستان' =>  ['is_enable' => true] , 'تنزانيا' =>  ['is_enable' => true] , 'تايلاند' =>  ['is_enable' => true] , 'تيمور ليشتي' =>  ['is_enable' => true] , 'توجو' =>  ['is_enable' => true] , 'تونغا' =>  ['is_enable' => true] , 'ترينداد وتوباغو' =>  ['is_enable' => true], 'ديك رومى' =>  ['is_enable' => true] , 'تركمانستان' =>  ['is_enable' => true] , 'توفالو' =>  ['is_enable' => true] , 'أوغندا' =>  ['is_enable' => true] , 'أوكرانيا' =>  ['is_enable' => true], 'المملكة المتحدة' =>  ['is_enable' => true] , 'الولايات المتحدة الأمريكية' =>  ['is_enable' => true] , 'أوروغواي' =>  ['is_enable' => true] , 'أوزبكستان' =>  ['is_enable' => true] , 'فانواتو' =>  ['is_enable' => true] , 'مدينة الفاتيكان' =>  ['is_enable' => true] , 'فنزويلا' =>  ['is_enable' => true] , 'فيتنام' =>  ['is_enable' => true], 'زامبيا' =>  ['is_enable' => true] , 'زيمبابوي'  =>  ['is_enable' => true]
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
