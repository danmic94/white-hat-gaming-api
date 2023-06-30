<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'game';
    public $timestamps = false;

    protected $casts = [
        'game_provider_id' => 'int',
        'name' => 'string',
        'launchcode' => 'string',
        'rtp' => 'float'
    ];

    protected $fillable = [
        'game_provider_id',
        'name',
        'launchcode',
        'rtp'
    ];

    /**
     * Get the GameProvider that it belongs to.
     */
    public function game_provider()
    {
        return $this->hasOne('App\Models\GameProvider', 'id');
    }

    /**
     * Get the Brand of the game.
     */
    public function brand_game()
    {
        return $this->hasMany('App\Models\BrandGame', 'launchcode');
    }
}
