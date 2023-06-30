<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameBrandBlock extends Model
{
    use HasFactory;
    protected $table = "game_brand_block";
    public $timestamps = false;

    protected $casts = [
        'launchcode' => 'string',
        'brandid' => 'integer',
    ];

    protected $fillable = [
        'launchcode',
        'brandid'
    ];

    /**
     * Get the Brand of the game.
     */
    public function blocked_game()
    {
        return $this->hasMany('App\Models\BrandGame', 'brandid', 'brandid');
    }

    /**
     * Get blocked launch codes for the games.
     */
    public function blocked_launch_codes()
    {
        return $this->hasMany('App\Models\BrandGame', 'launchcode', 'launchcode');
    }
}
