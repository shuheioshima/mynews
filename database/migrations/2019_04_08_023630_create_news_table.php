<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     //migrationとは、プログラムやデータ、OSなどの環境やプラットフォームの移行や変換すること。
     //関数up
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            // ニュースのタイトルを保存するカラム
            $table->string('body');
            // ニュースの本文を保存するカラム
            $table->string('image_path')->nullable();
            // 画像のパスを保存するカラム
            $table->timestamps();
        });
    }
    /*
関数upには、マイグレーション実行時のコードを書きます。
ここでは、id(主キー)、title、body、image_path、timestampsの５つのカラムを持つ、newsというテーブルを作成しています。
    /*

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
