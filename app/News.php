<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'title' => 'required',
      'body'  => 'required',
    );

    // 以下を追記
    // Newsモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\History');
    }
}

/*モデルに対してバリデーション(データの不備(未入力など)があった際にあらかじめ防ぐための仕組み)の定義を行う。

今回の設定は⬇️
バリデーションでデータが異常であることを見つけたときには、「データを保存せず」に「入力フォームへ戻す」ようにします。

*/
