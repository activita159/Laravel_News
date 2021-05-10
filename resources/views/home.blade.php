@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />


@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('main')
<div class="container">

    <table id="myDataTalbe"  class="display"  >
        <thead>
            <!--必填-->

            <tr>
                <th>標題</th>
                <th>日期</th>
                <th>圖片</th>
                <th>內文</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newsData as $news)
            <tr>
                <td>{{$news->title}}</td>
                <td>{{$news->date}}</td>
                <td>{{$news->img}}</td>
                <td>{{$news->content}}</td>
                {{-- <td>{{$news->created_at}}</td> --}}
                <td>
                    <button type="button">Edit</button>
                    <button type="button">Delete</button>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('js')
<!--引用jQuery-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!--引用dataTables.js-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(function () {

        $("#myDataTalbe").DataTable({
            searching: false, //關閉filter功能
            columnDefs: [{
                targets: [3],
                orderable: false,
            }]
        });
    });
</script>
@endsection

