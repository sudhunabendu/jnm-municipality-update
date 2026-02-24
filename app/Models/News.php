<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'content', 'slug', 'event_date', 'type'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
