@extends('layouts.template')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/taiwan-page1.css') }}">
@endsection


@section('main')
<div class="containerrrr">
    <h1><p>{{$newsDetail->title}}</p></h1>
    <div class="date">
        <p>{{$newsDetail->date}}</p>
        <p>{{$newsDetail->views}}</p>
    </div>
    <hr>
    <p>{{$newsDetail->content}}</p>
</div>
@endsection

