<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class GameCountryBlock extends Model
{
    use HasFactory;
    protected $table = "game_country_block";
    public $timestamps = false;

    protected $casts = [
        'launchcode' => 'string',
        'brandid' => 'integer',
        'country' => 'string'
    ];

    protected $fillable = [
        'launchcode',
        'brandid',
        'country'
    ];

    /**
     * Get all blocked brand games by country criteria.
     */
    public function blocked_brand_games()
    {
        return $this->hasMany('App\Models\BrandGame', 'brandid', 'brandid');
    }

    /**
     * Get all blocked brand games by country criteria using launchcode.
     */
    public function blocked_launchcode()
    {
        return $this->hasMany('App\Models\BrandGame', 'launchcode', 'launchcode');
    }
}
