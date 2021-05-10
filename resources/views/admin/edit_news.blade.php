@extends('layouts.template')

@section('css')

@endsection

@section('main')
    <form action="/news/update" method="POST">
    {{-- <form action="{{ route('news.update', ['news', $news]) }}" method="POST"> --}}

        @csrf
        {{-- @csrf 跨站請求攻擊 --}}

        <input type="hidden" name="id" value="{{$news->id}}">
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" id="title" name="title" value="{{$news->title}}">
        </div>
        <div class="form-group">
            <label for="date">時間</label>
            <input type="date" id="date" name="date" {{$news->date}}>
        </div>
        <div class="form-group">
            <label for="img">圖片</label>
            <input type="text" id="img" name="img" {{$news->img}}>
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$news->content}}</textarea>
        </div>
        <button type="submit">送出</button>
    </form>
@endsection

@section('js')

@endsection
