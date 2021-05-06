<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    

    //
    public function index()
    {
        $newsData = News::get();
        // $newsData = [{"id":1,"title":"12233","content":"safdfasdfas","img":"https:\/\/cdn.pixabay.com\/photo\/2015\/03\/26\/09\/47\/sky-690293__340.jpg","date":"2021-05-27","views":0,"created_at":"2021-05-06T08:43:46.000000Z","updated_at":"2021-05-06T08:43:46.000000Z"}]
        // compact('newsData') = ['newsData'=> [{"id":1,"title":"12233","content":"safdfasdfas","img":"https:\/\/cdn.pixabay.com\/photo\/2015\/03\/26\/09\/47\/sky-690293__340.jpg","date":"2021-05-27","views":0,"created_at":"2021-05-06T08:43:46.000000Z","updated_at":"2021-05-06T08:43:46.000000Z"}]]
        return view('news.taiwan-index',compact('newsData'));
    }
    public function details($id)
    {
        $newsDetail = News::find($id);
        return view('news.taiwan-page1',compact('newsDetail'));
    }

    public function create()
    {
        // News::create([
            
        //     'title'=>'abc',
        //     'date'=>'2021-05-05',
        //     'img'=>'https://cdn.pixabay.com/photo/2015/03/26/09/47/sky-690293__340.jpg',
        //     'content'=>'555555666666666',
        //     'view'=>0
        // ]);
        return view('news.create_news');
    }

    public function store(Request $request)
    {
        //取得資料
        //將資料存進資料庫
        News::create([
            'title'=>$request->title,
            'date'=>$request->date,
            'img'=>$request->img,
            'content'=>$request->content
        ]);
        
        //返回最新消息列表頁面
        return redirect('news');
        
    }

    public function delete($id)
    {
        News::
        where('id',$id)
        ->delete();
    }

    public function update($id)
    {
        DB::table('news')
        ->where('id',$id)
        ->update(['title'=>'aaa']);
    }




}
