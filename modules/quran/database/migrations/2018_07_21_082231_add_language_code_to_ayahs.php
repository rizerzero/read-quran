<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Module\Quran\Models\Language;
use App\Module\Quran\Models\Ayah;

class AddLanguageCodeToAyahs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quran', function (Blueprint $table) {
            $table->string('language_code', 10)->after('id')->nullable();
        });

        $languages = Language::get();
        
        foreach ($languages as $lang) {
            Ayah::where('language_id', $lang->ref_id)
                ->update(['language_code' => $lang->code]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quran', function (Blueprint $table) {
            //
        });
    }
}
