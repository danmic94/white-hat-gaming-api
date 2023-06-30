<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameProvider extends Model
{
    use HasFactory;
    protected $table = 'game_providers';
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'name' => 'string',
    ];

    protected $fillable = [
        'name',
    ];


    /**
     * Get all the games that belong to a game provider.
     */
    public function games()
    {
        return $this->hasMany('App\Models\GameProviders', 'id', 'game_provider_id');
    }
}
