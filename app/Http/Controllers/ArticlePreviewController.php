<?php

namespace App\Http\Controllers;

use App\Models\ArticlePreview;

class ArticlePreviewController
{
    public function index()
    {
        $articlePreview = ['articlePreview' => ArticlePreview::get()];
        return view('article-preview', $articlePreview);
    }
}
