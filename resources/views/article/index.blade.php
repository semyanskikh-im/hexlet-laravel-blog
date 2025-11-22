@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h1>Список статей</h1>

    <div>
        <a href="{{ route('articles.create') }}">Создать новую статью</a>
        <br>    
    </div>

    @foreach ($articles as $article)
        <h2><a href=" {{ route('articles.show', $article->id) }} ">{{ $article->name }}</a></h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach

    <br>
    <br>


    {{ $articles->links() }}
    <style>
    .w-5 {
        width: 1rem !important;
        height: 1rem !important;
    }
    
    /* Выравнивание ВСЕХ элементов пагинации */
    .relative.z-0.inline-flex.rtl\\:flex-row-reverse > * {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        min-height: 2rem !important;
        padding: 0.375rem 0.5rem !important;
        line-height: 1 !important;
    }
    


</style>

@endsection
