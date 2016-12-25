<?php namespace App\Module\Quran\Models;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    protected $table = 'Quran';

    protected $primaryKey = 'id';

    protected $fillable = [];

    public function language()
    {
        return $this->belongsTo(Language::class, 'DatabaseID', 'ref_id');
    }
}
