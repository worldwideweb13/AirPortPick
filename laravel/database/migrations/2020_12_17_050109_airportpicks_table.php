<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AirportpicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('iid');//アイテム自体の番号
            $table->string('icate');//商品のカテゴリー
            $table->string('iname');//商品名
            $table->integer('iprice');//商品の価格
            $table->string('itext');//商品の説明文
            $table->string('pic');//使用画像
            $table->string('shop');//取り扱い店舗
            $table->string('cold');//常温・冷蔵・冷凍
            $table->timestamps();
            $table->primary(['iid']);
         });

         Schema::create('carts', function (Blueprint $table) {
            $table->integer('oitem');//アイテムごとの注文番号
            $table->integer('onum');//注文自体の番号
            $table->string('oiid');//アイテム自体の番号。itemのiidに相当
            $table->string('iname');//アイテム自体の名前
            $table->integer('snum');//点数
            $table->integer('picked');//ピックアップしたか
            $table->integer('checked');//検品したか
            $table->integer('sprice');//単価×数量の価格
            $table->timestamps();
            $table->primary(['oitem']);
         });

         Schema::create('order_tables', function (Blueprint $table) {
            $table->integer('onum');//注文自体の番号
            $table->integer('tensu');//注文自体の合計商品点数
            $table->string('otime');//注文受付時間
            $table->string('item_total');//商品金額の合計
            $table->string('dprice');//宅配料
            $table->string('uid');//オーダーしたユーザーのID
            $table->string('uname');//オーダーしたユーザーの名前
            $table->string('pid');//担当ピッカーのID
            $table->integer('comp');//ピックが完了したか。1が完了/0が未完
            $table->string('place');//受取場所
            $table->string('timelimit');//ピックの期限
            $table->string('cold');//常温・冷蔵・冷凍
            $table->string('portdate');//空港での受取日時
            $table->string('delidate');//宅配の指定日
            $table->string('delitime');//宅配の指定時間
            $table->integer('paid');//支払い済か
            $table->integer('ported');//客が空港でピックアップしたか
            $table->integer('sent');//配送済か
            $table->timestamps();
            $table->primary(['onum']);
         });

         Schema::create('pickers', function (Blueprint $table) {
            $table->integer('pid');//ピッカーのID
            $table->string('ppass');//ピッカーのパスワード
            $table->string('pname');//ピッカーの名前
            $table->timestamps();
            $table->primary(['pid']);
         });

         Schema::create('users', function (Blueprint $table) {
            $table->integer('uid');//ユーザーID
            $table->string('upass');//ユーザーパスワード
            $table->string('uname');//ユーザー氏名
            $table->string('address');//ユーザー住所
            $table->string('phone');//ユーザー電話番号
            $table->string('birth');//ユーザー誕生日
            $table->string('splace1');//ユーザー配送先１
            $table->string('splace2');//ユーザー配送先２
            $table->string('splace3');//ユーザー配送先３
            $table->timestamps();
            $table->primary(['uid']);
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
        Schema::drop('carts');
        Schema::drop('order_tables');
        Schema::drop('pickers');
        Schema::drop('users');
    }
}
