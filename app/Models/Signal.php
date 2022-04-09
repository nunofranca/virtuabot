<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signal extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['strategy_id', 'home', 'visit', 'status', 'gap'];

    public function duel()
    {
        return $this->belongsTo(Duel::class);
    }

    public function strategy()
    {
        return $this->belongsTo(Strategy::class);
    }
}
