<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    // protected $primaryKey = 'id';
    // protected $guarded =['view'];  //除了view以外，其他欄位都可以加或變更資料
    protected $fillable =['title','date','img','content','view','created_at','updated_at'];
}
