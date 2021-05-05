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




}
