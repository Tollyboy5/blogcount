<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model implements Viewable
{
    use InteractsWithViews;

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'views',
        'likes',
        'tag',
    ];
}
