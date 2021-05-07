@extends('layouts.template')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/taiwan.css') }}">
@endsection


@section('main')
<div class="containerrr">
    <div class="messages">
        <h1><p>最新消息</p></h1>

        <div class="data">
            <p>資料總比數:xxx</p>
            <p>每頁筆數:xxx</p>
            <p>總頁數:xxx</p>
            <p>目前頁次:xxx</p>
        </div>
    </div>
    <hr>

    @foreach ($newsData as $item)
    <div class="news">
        <img src="{{$item->img}}" width="40%" height="10%" alt="">
        <div class="detail">
            <p class="newsnews">最新消息</p>
            <a class="btn btn-primary" href="/news/edit/{{ $item->id }}">編輯</a>
            <button class="delete" data-id="{{$item->id}}">刪除</button>

            <a href="/news/details/{{$item->id}}"><h2><p>{{$item->title}}</p></h2></a>
            <p>{{$item->date}}</p>
            <p>{{$item->content}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection


@section('js')

<script>
    var clickBtns = document.querySelectorAll('.delete');
    clickBtns.forEach( function (btn) {
        btn.addEventListener('click',function () {
            if(confirm('確定刪除嗎')){
                var id = this.getAttribute('data-id');
                location.href='/news/delete/'+id;
            }

        })


    });
</script>

@endsection


