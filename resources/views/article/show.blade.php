@extends('layouts.app')

@section('title')
    Статья - {{ $article->name }}
@endsection

@section('content')
    <h1>{{ $article->name }}</h1>
    <p>{{ $article->body }}</p>
    <br>
    <a href="{{ route('about') }}">Back to about</a>
@endsection
