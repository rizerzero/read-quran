<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    private $languages = [
      ['name' => 'Bangla', 'code' => 'bn', 'ref_id' => 50],
      ['name' => 'German', 'code' => 'de', 'ref_id' => 65],
      ['name' => 'Finnish', 'code' => 'fi', 'ref_id' => 20],
      ['name' => 'French', 'code' => 'fr', 'ref_id' => 22],
      ['name' => 'Czech', 'code' => 'cs', 'ref_id' => 107],
      ['name' => 'Chinese', 'code' => 'zh', 'ref_id' => 12],
      ['name' => 'Bulgarian', 'code' => 'bg', 'ref_id' => 36],
      ['name' => 'Bosnian', 'code' => 'bs', 'ref_id' => 8],
      ['name' => 'Azerbaijani', 'code' => 'az', 'ref_id' => 121],
      ['name' => 'English', 'code' => 'en', 'ref_id' => 103],
      ['name' => 'Hausa', 'code' => 'ha', 'ref_id' => 122],
      ['name' => 'Indonesian', 'code' => 'id', 'ref_id' => 68],
      ['name' => 'Italian', 'code' => 'it', 'ref_id' => 13],
      ['name' => 'Japanese', 'code' => 'ja', 'ref_id' => 24],
      ['name' => 'Kurdish', 'code' => 'ku', 'ref_id' => 39],
      ['name' => 'Korean', 'code' => 'ko', 'ref_id' => 71],
      ['name' => 'Polish', 'code' => 'pl', 'ref_id' => 117],
      ['name' => 'Portuguese', 'code' => 'pt', 'ref_id' => 28],
      ['name' => 'Malay', 'code' => 'ms', 'ref_id' => 26],
      ['name' => 'Persian', 'code' => 'fa', 'ref_id' => 73],
      ['name' => 'Romanian', 'code' => 'ro', 'ref_id' => 123],
      ['name' => 'Malayalam', 'code' => 'ml', 'ref_id' => 51],
      ['name' => 'Somali', 'code' => 'so', 'ref_id' => 118],
      ['name' => 'Russian', 'code' => 'ru', 'ref_id' => 29],
      ['name' => 'Swedish', 'code' => 'sv', 'ref_id' => 99],
      ['name' => 'Spanish', 'code' => 'es', 'ref_id' => 82],
      ['name' => 'Turkish', 'code' => 'tr', 'ref_id' => 151],
      ['name' => 'Tatar', 'code' => 'tt', 'ref_id' => 83],
      ['name' => 'Urdu', 'code' => 'ur', 'ref_id' => 112],
      ['name' => 'Tamil', 'code' => 'ta', 'ref_id' => 52],
      ['name' => 'Uzbek', 'code' => 'uz', 'ref_id' => 120],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Module\Quran\Models\Language::insert($this->languages);
    }
}
