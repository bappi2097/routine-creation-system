<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Color extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function routine()
    {
        return $this->belongsTo(Color::class);
    }
}
