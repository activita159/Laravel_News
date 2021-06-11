@extends('layouts.template')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('main')
    <form action="/news/store" method="POST">
        @csrf    
        {{-- @csrf 跨站請求攻擊 --}}


        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="date">時間</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="img">圖片</label>
            <input type="text" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <textarea name="content" id="content" cols="50" rows="20" style="height: 500px"></textarea>
        </div>
        <button type="submit">送出</button>
    </form>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#content').summernote();
});
</script>
@endsection