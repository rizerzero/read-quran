<?php namespace App\Module\Quran\Models;

use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    protected $table = 'surah';

    protected $primaryKey = 'id';

    protected $fillable = [];

    public function verses()
    {
        return $this->hasMany(Verse::class,'surah_id', 'id');
    }
}
