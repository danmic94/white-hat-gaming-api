<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandGame extends Model
{
    use HasFactory;
    protected $table = "brand_games";
    public $timestamps = false;

    protected $casts = [
        'launchcode' => 'string',
        'brandid' => 'integer',
        'category' => 'string',
        'hot' => 'boolean',
        'new' => 'boolean'
    ];

    protected $fillable = [
        'launchcode',
        'brandid',
        'category',
        'hot',
        'new',
    ];

    /**
     * Get the games that a brand has.
     */
    public function games()
    {
        return $this->hasMany('App\Models\Game', 'launchcode');
    }

    /**
     * Get the countries in which the brand game is blocked.
     */
    public function country_block()
    {
        return $this->hasMany('App\Models\GameCountryBlock', 'launchcode');
    }

    /**
     * Get the brand games which are blocked.
     */
    public function brand_game_block()
    {
        return $this->hasMany('App\Models\GameBrandBlock', 'launchcode');
    }
}
