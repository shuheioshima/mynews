<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarder = array('id');

    //以下を追記
    public static $rules = array(
      'news_id' => 'required',
      'edited_at' => 'required',
    );
}
