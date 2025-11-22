@extends('layouts.app')

@section('title')
    Статья - {{ $article->name }}
@endsection 

@section('content')

    {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
    @include('article.form')
    {{ html()->submit('Обновить')->class('btn btn-primary') }}
    {{ html()->closeModelForm() }}

@endsection
