<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signal extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['home', 'visit', 'status'];

    public function duel()
    {
        return $this->belongsTo(Duel::class);
    }

}
