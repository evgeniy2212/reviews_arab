<?php

use Illuminate\Database\Seeder;
use \App\Models\ReviewCharacteristic;
use \App\Models\ReviewCategory;

class ReviewCharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $characteristics = [
             'person' => [
                 ['name' =>  [
                     'en' => 'Honest',
                     'ar' => 'أمين',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Loyal',
                     'ar' => 'مخلص',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Responsible',
                     'ar' => 'مسؤول',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Respectful',
                     'ar' => 'محترم',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Humble',
                     'ar' => 'متواضع',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Forgiving',
                     'ar' => 'سيء',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Compassionate',
                     'ar' => 'رحيم',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Fair',
                     'ar' => 'عادل',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Authentic',
                     'ar' => 'صادق',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Courageous',
                     'ar' => 'شجاع',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Generous',
                     'ar' => 'كريم',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Polite',
                     'ar' => 'مؤدب',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Kind',
                     'ar' => 'عطوف',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Loving',
                     'ar' => 'محب',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Reliable',
                     'ar' => 'جدير بالثقة',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Conscientious',
                     'ar' => 'حي الضمير',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Patient',
                     'ar' => 'صبور',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Thorough',
                     'ar' => 'شامل',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Dishonest',
                     'ar' => 'غير أمين',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Selfish',
                     'ar' => 'أناني',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Arrogant',
                     'ar' => 'متكبر',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Rude',
                     'ar' => 'وقح',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Cruel',
                     'ar' => 'قاسي',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Hypocritical',
                     'ar' => 'منافق',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Jealous',
                     'ar' => 'غيور',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Immoral',
                     'ar' => 'عديم الأخلاق',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Greedy',
                     'ar' => 'جشع',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Lazy',
                     'ar' => 'كسول',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Unscrupulous',
                     'ar' => 'عديم الضمير',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Vengeful',
                     'ar' => 'حاقد',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Deceptive',
                     'ar' => 'مخادع',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Unforgiving',
                     'ar' => 'متسامح',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Nasty',
                     'ar' => 'سيء',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Aggressive',
                     'ar' => 'عدواني',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Disrespectful',
                     'ar' => 'غير محترم',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Bossy',
                     'ar' => 'متسلط',
                 ], 'is_positive' => false, 'is_published' => true,],
             ],
             'company' => [
                 ['name' =>  [
                     'en' => 'Adventurous',
                     'ar' => 'مغامر',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Agile',
                     'ar' => 'رشيق',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Challenging',
                     'ar' => 'يتسم بروح التحدي',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Collaborative',
                     'ar' => 'تعاوني',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Creative',
                     'ar' => 'ابداعي',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Daring',
                     'ar' => 'جريء',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Energetic',
                     'ar' => 'بالحيوية',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Energizing',
                     'ar' => 'محفز',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Fun',
                     'ar' => 'غير داعم',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Friendly',
                     'ar' => 'ودود',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Inclusive',
                     'ar' => 'شامل',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Innovate',
                     'ar' => 'ابتكاري',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Inspiring',
                     'ar' => 'ملهم',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Passionate',
                     'ar' => 'عاطفي',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Playful',
                     'ar' => 'لعوب',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Progressive',
                     'ar' => 'تقدمي',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Respectful',
                     'ar' => 'إدارة دقيقة',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Rewarding',
                     'ar' => 'مجزي',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'ودود',
                     'ar' => 'Пристрастный',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Boring',
                     'ar' => 'ممل',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Discriminatory',
                     'ar' => 'قائم على التمييز',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Demanding',
                     'ar' => 'كثير المطالب',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Disengaged',
                     'ar' => 'منفصل',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Disrespectful',
                     'ar' => 'لعوب',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Messy',
                     'ar' => 'فوضوي',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Micromanaging',
                     'ar' => 'إدارة دقيقة',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Inflexible',
                     'ar' => 'غير مرن',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Deceptive',
                     'ar' => 'مخادع',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Outdated',
                     'ar' => 'شعبي',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Rigid',
                     'ar' => 'صارم',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Stressful',
                     'ar' => 'مجهد',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Toxic',
                     'ar' => 'مسمم',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Unethical',
                     'ar' => 'غير اخلاقي',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Unforgiving',
                     'ar' => 'لا يرحم',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Unrewarding',
                     'ar' => 'غير مجزي',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Unsupportive',
                     'ar' => 'غير داعم',
                 ], 'is_positive' => false, 'is_published' => true,],
             ],
             'goods' => [
                 ['name' =>  [
                     'en' => 'Comfortable',
                     'ar' => 'مريح',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Durable',
                     'ar' => 'يتحمل مع الزمن',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Effective',
                     'ar' => 'فعال',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'منخفض الجودة',
                     'ar' => 'منخفض الجودة',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Popular',
                     'ar' => 'عفى عليه الزمن',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Quality',
                     'ar' => 'ذو جودة',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Stylish',
                     'ar' => 'أنيق',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Well-priced',
                     'ar' => 'سعر جيد',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Useful',
                     'ar' => 'مفيد',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Creamy',
                     'ar' => 'دسم',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Delicious',
                     'ar' => 'لذيذ',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Dangerous',
                     'ar' => 'خطر',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Fragrant',
                     'ar' => 'عطر',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Nutritious',
                     'ar' => 'مغذي',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Organic',
                     'ar' => 'أورجانيك',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Peculiar',
                     'ar' => 'غريب',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Smooth',
                     'ar' => 'أملس',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Tempting',
                     'ar' => 'مغري',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' =>  [
                     'en' => 'Bad',
                     'ar' => 'سيء',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Faulty',
                     'ar' => 'معيوب',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Uncomfortable',
                     'ar' => 'غير مريح',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Low quality',
                     'ar' => 'منخفض الجودة',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Outdated',
                     'ar' => 'قديم الطراز',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Impractical',
                     'ar' => 'غير عملي',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Overrated',
                     'ar' => 'مبالغ فيه',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Primitive',
                     'ar' => 'بدائي',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Useless',
                     'ar' => 'عديم الفائدة',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Bitter',
                     'ar' => 'مرير',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Chewy',
                     'ar' => 'صعب المضغ',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Disgusting',
                     'ar' => 'مقرف',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Harmful',
                     'ar' => 'ضار',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Horrible',
                     'ar' => 'مروع',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Tasteless',
                     'ar' => 'عديم الطعم',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Terrible',
                     'ar' => 'فظيع',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Unpleasant',
                     'ar' => 'غير لطيف',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Unusual',
                     'ar' => 'غير معتاد',
                 ], 'is_positive' => false, 'is_published' => true,],
             ],
             'vocations' => [
                 ['name' => [
                     'en' => 'Alive',
                     'ar' => 'حية',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Attractive',
                     'ar' => 'جذاب',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Beautiful',
                     'ar' => 'جميل',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Calm',
                     'ar' => 'هادئ',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Comfortable',
                     'ar' => 'شديد الإزدحام',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Enchanting',
                     'ar' => 'ساحر',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Exciting',
                     'ar' => 'مثير',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Exotic',
                     'ar' => 'عجيب',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Fascinating',
                     'ar' => 'مدهش',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Friendly',
                     'ar' => 'كئيب',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Fun',
                     'ar' => 'مرح',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Homey',
                     'ar' => 'لطيف',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Inexpensive',
                     'ar' => 'غير مكلف',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Interesting',
                     'ar' => 'ممتع',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Lively',
                     'ar' => 'مفعم بالحياة',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Peaceful',
                     'ar' => 'سلمي',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Picturesque',
                     'ar' => 'رائع',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Unspoiled',
                     'ar' => 'غير ملوث',
                 ], 'is_positive' => true, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Bleak',
                     'ar' => 'كئيب',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Boring',
                     'ar' => 'ممل',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Bustling',
                     'ar' => 'صخب',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Creepy',
                     'ar' => 'مخيف',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Crowded',
                     'ar' => 'مزدحم',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Dangerous',
                     'ar' => 'خطير',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Desert',
                     'ar' => 'مهجور',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Desolate',
                     'ar' => 'مقفر',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Dirty',
                     'ar' => 'متسخ',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Dull',
                     'ar' => 'متبلد',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Hectic',
                     'ar' => 'عصيب',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Horrifying',
                     'ar' => 'مرعب',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Nightmarish',
                     'ar' => 'مفزع',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Overcrowded',
                     'ar' => 'شديد الإزدحام',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Polluted',
                     'ar' => 'ملوث',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Pricey',
                     'ar' => 'مكلف',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Stormy',
                     'ar' => 'عاصف',
                 ], 'is_positive' => false, 'is_published' => true,],
                 ['name' => [
                     'en' => 'Terrible',
                     'ar' => 'فظيع',
                 ], 'is_positive' => false, 'is_published' => true,],
             ]
         ];

         foreach(ReviewCharacteristic::all() as $characteristic){
             $characteristic->delete();
         }
         foreach($characteristics as $characteristic_category => $characteristics){
             $category_id = ReviewCategory::where('slug', '=', $characteristic_category)->first()->id;
             foreach($characteristics as $characteristic){
                 $characteristic['review_category_id'] = $category_id;
                 $charactData = [
                     'review_category_id' => $category_id,
                     'is_positive' => $characteristic['is_positive'],
                     'is_published' => $characteristic['is_published'],
                 ];
                 foreach(app('laravellocalization')->getSupportedLocales() as $localeKey => $locale){
                     $charactData[$localeKey] = [
                         'name' => \Illuminate\Support\Arr::get($characteristic['name'], $localeKey, app('laravellocalization')->getDefaultLocale())
                     ];
                 }
                 ReviewCharacteristic::create($charactData);
             }
         }
     }
}
