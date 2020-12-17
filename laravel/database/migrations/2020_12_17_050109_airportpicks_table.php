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
            $table->integer('iid');
            $table->string('icate');
            $table->string('iname');
            $table->integer('iprice');
            $table->string('itext');
            $table->string('pic');
            $table->string('shop');
            $table->string('cold');
            $table->timestamps();
         });

         Schema::create('carts', function (Blueprint $table) {
            $table->integer('onum');
            $table->string('iid');
            $table->string('iname');
            $table->integer('snum');
            $table->integer('picked');
            $table->integer('checked');
            $table->integer('sprice');
            $table->timestamps();
         });

         Schema::create('order_tables', function (Blueprint $table) {
            $table->integer('onum');
            $table->dateTime('otime');
            $table->integer('item_total');
            $table->integer('dprice');
            $table->string('uid');
            $table->string('pid');
            $table->string('place');
            $table->string('portdate');
            $table->string('delidate');
            $table->string('delitime');
            $table->integer('paid');
            $table->integer('ported');
            $table->integer('sent');
            $table->timestamps();
         });

         Schema::create('pickers', function (Blueprint $table) {
            $table->integer('pid');
            $table->string('ppass');
            $table->string('pname');
            $table->timestamps();
         });

         Schema::create('users', function (Blueprint $table) {
            $table->string('uid');
            $table->string('upass');
            $table->string('uname');
            $table->string('address');
            $table->integer('phone');
            $table->string('birth');
            $table->string('splace1');
            $table->string('splace2');
            $table->string('splace3');
            $table->timestamps();
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
