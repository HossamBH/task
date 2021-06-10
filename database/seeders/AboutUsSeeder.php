<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->delete();
        DB::table('about_us')->insert([
            'aboutUs_en' => 'The "vcv" application provides job seekers in a new way by registering an account for the applicant that includes an introductory video for the researcher , in addition to personal and social data, qualifications and previous experiences, allowing the addition of valuable information to facilitate the searcher It is about employment opportunities, purifying options and saving time, and also helping to determine the extent of applicants ’compatibility with the job before conducting an“ interview ”, a method that has not been used previously and has not been introduced before in the labor market. Therefore, the application of“ vcv ”is a new recruitment mechanism for a series of sectors. Governmental, private and for job seekers globally looking for a job?',
            'aboutUs_ar' => 'تطبيق " vcv" يقدم الباحثين عن العمل بأسلوب جديد عن طريق تسجيل حساب خاص بالمتقدم يتضمن فيديو تعريفي للباحث بالإضافة الي البيانات الشخصية والاجتماعية و المؤهلات والخبرات السابقة ،بما يتيح إضافة معلومات قيمة تسهل على الجهة الباحثة عن فرص توظيف تنقية الاختيارات وتوفير الوقت، وأيضاً تساعد على تحديد مدى توافق المتقدمين مع الوظيفة قبل عمل مقابلة شخصية "interview"، وهي طريقة لم يسبق استخدامها ولم تطرح من قبل في سوق العمل، ولذلك يعد تطبيق "vcv" ألية توظيف جديدة لسلسة من القطاعات الحكومية والخاصة وللباحثين عن العمل على مستوى العالم تبحث عن وظيفة؟ أنشأ حساب خاص بك وقم بإضافة فيديو تعريفي واختار الباقة المميزة',
        ]);
    }
}
