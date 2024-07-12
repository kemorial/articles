<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController
{


    public function getArticle($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return redirect()->route('index');
        }
        $content = ['article' => $article];
        return view('article', $content);
    }
}
