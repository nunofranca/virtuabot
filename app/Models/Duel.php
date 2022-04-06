<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Duel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['league_id', 'dateHour', 'clubHome', 'goalHome', 'goalVisit', 'clubVisit'];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

}
