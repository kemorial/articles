@extends('layouts.index')
@section('content')
<div class="article">
    <div class="article__header">
        <h1 class="article__header_name">{{$article['article_header']}}</h1>
        <p class="article__header_descr">{{$article['article_descr']}}
        </p>
    </div>
    <div class="article__meta">
        <div class="article__meta_date">
            <h2>DATE</h2>
            <div>{{$article['article_date']}}</div>
        </div>
        <div class="article__meta_author">
            <h2>AUTHOR</h2>
            <div>{{$article['article_author']}}</div>
        </div>
        <div class="article__meta_read">
            <h2>READ</h2>
            <div>{{$article['article_time_to_read']}} Min</div>
        </div>
    </div>

    <div class="article__image">
        <img src="{{$article['article_img']}}" alt="building" />
    </div>

    <div class="article_body">
        {!!$article['article_body']!!}
    </div>
</div>
<a class="article__back" href="/">Назад</a>
@endsection
