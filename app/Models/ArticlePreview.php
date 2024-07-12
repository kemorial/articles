<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlePreview extends Model
{
    protected $fillable = [
        'img',
        'tag',
        'card_header',
        'card_descr'
    ];
}
