<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\MorphTo;

class Log extends Model
{
    use HasFactory;

    public function loggable()
    {
        return $this->morphTo();
    }
}
