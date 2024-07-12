@extends('layouts.index')
@section('content')
<div class="cards_container">
    @foreach ($articlePreview as $article)
        <a class="card" href="{{Route('article', ['id' => $article->id])}}">
            <div class="card__tag">{{$article['tag']}}</div>
            <img class="card__img" src="{{$article['img']}}" alt="building" />
            <div class="card__text_container">
                <h1 class="card__header">{{$article['card_header']}}</h2>
                    <p class="card_descr">
                        {{$article['card_descr']}}
                    </p>
            </div>
        </a>
    @endforeach
</div>
@endsection
