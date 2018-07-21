<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Module\Quran\Models\Favorite;
use App\Module\Quran\Models\Ayah;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeWithFavoriteAyahs($query) 
    {
        $query->with([
            'favoriteAyahs'
            ]);
    }    

    public function favoriteAyahs()
    {
        $relation =  $this->belongsToMany(Ayah::class, 'favorites', 'created_by', 'verse_id', null, 'verse_id')
            ->whereNull('favorites.deleted_at')
            ->whereRaw('`quran`.`surah_id`=`favorites`.`chapter_id`');
        // $relation
        // ->getQuery() // Eloquent\Builder
        // ->getQuery() // Query\Builder
        // ->joins = [];
        // $relation->getQuery()->join('favorites', function($join) {
        //     $join->on('quran.verse_id', '=', 'favorites.verse_id')
        //         ->whereRaw('`quran`.`surah_id`=`favorites`.`chapter_id`');
        // });

        return $relation;
    }
}
