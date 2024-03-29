<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'country'
    ];

    public $with = [
        'translations',
    ];

    protected $fillable = [
        'id',
        'slug',
        'is_enable'
    ];

    public function regions(){
        return $this->hasMany(Region::class, 'country_id', 'id')
            ->orderByTranslation('region', 'desc');
    }

    public function reviews(){
        return $this->hasMany(Review::class, 'country_id', 'id');
    }

    public function getRegionsByCountry($id){
        return $this->whereId($id)
            ->first()
            ->regions()
            ->get()
            ->toArray();
    }

    public function getAllCountries($categoryId = null){
        return $this->enabled()
            ->get()
            ->mapWithKeys(function($item, $key) {
                return [$item->id => $item->country];
            });
    }

    public function getCountriesContainRegions($categoryId = null){
        return $this->enabled()
            ->whereHas('regions')
            ->get()
            ->mapWithKeys(function($item, $key) {
                return [$item->id => $item->country];
            });
    }

    public function scopeEnabled($query){
        return $query->where('is_enable', true);
    }
}
