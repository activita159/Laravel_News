<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    

    //
    public function index()
    {
        $newsData = DB::table('news')->get();
        
        return view('news.taiwan-index',compact('newsData'));
    }
    public function details($id)
    {
        $newsDetail = DB::table('news')->find($id);
        return view('news.taiwan-page1',compact('newsDetail'));
    }

    public function create()
    {
        DB::table('news')->insert([
            
            'title'=>'abc',
            'date'=>'2021-05-05',
            'img'=>'https://cdn.pixabay.com/photo/2015/03/26/09/47/sky-690293__340.jpg',
            'content'=>'555555666666666',
            'views'=>0
        ]);
    }

    public function delete($id)
    {
        DB::table('news')
        ->where('id',$id)
        ->delete();
    }

    public function update($id)
    {
        DB::table('news')
        ->where('id',$id)
        ->update(['title'=>'aaa']);
    }




}
