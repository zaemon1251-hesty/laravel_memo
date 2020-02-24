<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    //table名を指定

    protected $table = 'memo';

    //カラムを指定

    protected $fillabel = [
        'title','content'
    ];

    protected $guarded = ["id"];
    
    //create_atを使わない場合はFalseにする
    
    public $timestamps = false;

}
