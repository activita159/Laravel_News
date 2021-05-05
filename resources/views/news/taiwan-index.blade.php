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
    <div class="news">
        <img src="{{$newsData[0]->img}}" width="40%" height="10%" alt="">
        <div class="detail">
            <p class="newsnews">最新消息</p>
            <h2><p>經典小鎮升級3.0正式開跑　小鎮逗鎮趣 集章抽好禮</p></h2>
            <p>2021-05-03</p>
            <p>為推動「小鎮漫遊」，交通部觀光局於108年配合「小鎮漫遊年」遴選40個特色小鎮，109年延續小鎮熱潮，配合「脊梁山脈旅遊年」遴選出30個經典/山城小鎮，今（110）年配合「自行車旅遊年」遴選出30個經典/自行車小鎮，邀請大家慢騎自行車小鎮，領略小鎮在地之美。 交通部觀光局張錫聰局長表示，...</p>
        </div>
    </div>
</div>
@endsection


