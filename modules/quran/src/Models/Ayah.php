<?php namespace App\Module\Quran\Models;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $table = 'quran';

    protected $primaryKey = 'id';

    protected $fillable = [];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id', 'ref_id');
    }

    public function surah(Type $var = null)
    {
        return $this->belongsTo(Surah::class, 'surah_id');
    }

    public function getIdLabelAttribute(Type $var = null)
    {
        return $this->surah->id_label . str_pad($this->verse_id, '3', '0', STR_PAD_LEFT);
    }

    public function getAudioUrlAttribute()
    {
        return config('quran.audio.verse_url') . '/' . $this->id_label . '.mp3';
    }

    public function tags($surahId = null)
    {
        $rel =  $this->belongsToMany(Tag::class, 'ayah_tag', 'verse_id', 'tag_id', 'verse_id');
            
        if ($surahId) {
            $rel = $rel->wherePivot('surah_id', $surahId);
        };

        return $rel;
    }
}
