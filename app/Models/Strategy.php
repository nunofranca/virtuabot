<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Strategy extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function signals()
    {
        return $this->hasMany(Signal::class);
    }
}
