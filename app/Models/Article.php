<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'article_header',
        'article_descr',
        'article_img',
        'article_author',
        'article_body',
        'article_time_to_read',
    ];
}
