@extends('layouts.app')

@section('title')
    Статья - {{ $article->name }}
@endsection

@section('content')
    <h1>{{ $article->name }}</h1>
    <p>{{ $article->body }}</p>
    <br>
    <a href="{{ route('articles.edit', $article) }}">Изменить</a><br><br>
    <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" class="fa fa-remove"
        rel="nofollow">Удалить</a><br><br>

    <a href="{{ route('about') }}">Back to about</a>
@endsection
