@extends('master')
@section('seo_title')
    @if(!$page->seo_title)
        {{$page->name}}
    @else
        {{$page->seo_title}}
    @endif
@endsection
@section('meta_description')
    @if(!$page->meta_description)
        {{$page->excerpt}}
    @else
        {{$page->meta_description}}
    @endif
@endsection
@section('meta_keywords',$page->meta_keywords)

@section('content')

@endsection