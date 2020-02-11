<?php

use Illuminate\Database\Seeder;

class LocalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locales = [
            'en'=>'English',
            'az'=>'Azeri'
        ];

        foreach($locales as $locale=>$localeName)
        {

            \App\Locale::updateOrCreate(
                [
                    'locale'=>$locale
                ],
                [
                    'locale'=>$locale,
                    'locale_name'=>$localeName
                ]
            );
        }
    }
}
