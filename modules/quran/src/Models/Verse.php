<?php namespace App\Module\Quran\Models;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    protected $table = 'Quran';

    protected $primaryKey = 'id';

    protected $fillable = [];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id', 'ref_id');
    }

    public function surah(Type $var = null)
    {
        # code...
        return $this->belongsTo(Surah::class, 'surah_id');
    }
    public function getIdLabelAttribute(Type $var = null)
    {
        # code...
        return $this->surah->id_label . str_pad($this->verse_id, '3', '0', STR_PAD_LEFT);
    }

    public function getAudioUrlAttribute()
    {
        return config('quran.audio.verse_url') . '/' . $this->id_label . '.mp3';
    }
}
