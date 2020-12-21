<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order_table;

class Order_tableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_table::insert([
            [
                'onum' => '1',
                'tensu' => '1',
                'otime' => '2020年12月20日18時30分',
                'item_total' => '40000',
                'dprice' => '0',
                'uid' => '1',
                'uname' => 'いしい',
                'pid' => '1',
                'comp' => '0',
                'place' => '空港',
                'timelimit' => '2020年12月24日14時00分',
                'cold' => '常温',
                'portdate' => '2020年12月24日15時',
                'delidate' => '0',
                'delitime' => '0',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '2',
                'tensu' => '4',
                'otime' => '2020年12月20日20時00分',
                'item_total' => '28000',
                'dprice' => '0',
                'uid' => '2',
                'uname' => 'にしやま',
                'pid' => '2',
                'comp' => '0',
                'place' => '宅配',
                'timelimit' => '2020年12月21日17時00分',
                'cold' => '冷凍',
                'portdate' => '0',
                'delidate' => '2020年12月24日',
                'delitime' => '午前中',
                'paid' => '1',
                'ported' => '0',
                'sent' => '1',
            ],
            [
                'onum' => '3',
                'tensu' => '10',
                'otime' => '2020年12月20日20時17分',
                'item_total' => '8000',
                'dprice' => '0',
                'uid' => '3',
                'uname' => 'みむら',
                'pid' => '3',
                'comp' => '0',
                'place' => '宅配',
                'timelimit' => '2020年12月21日17時00分',
                'cold' => '常温',
                'portdate' => '0',
                'delidate' => '2020年12月24日',
                'delitime' => '午前中',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '4',
                'tensu' => '4',
                'otime' => '2020年12月20日20時30分',
                'item_total' => '12800',
                'dprice' => '0',
                'uid' => '1',
                'uname' => 'いしい',
                'pid' => '4',
                'comp' => '0',
                'place' => '宅配',
                'timelimit' => '2020年12月24日17時00分',
                'cold' => '冷蔵',
                'portdate' => '0',
                'delidate' => '2020年12月27日',
                'delitime' => '15-18時',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '5',
                'tensu' => '3',
                'otime' => '2020年12月20日20時40分',
                'item_total' => '6000',
                'dprice' => '0',
                'uid' => '4',
                'uname' => 'しょうじ',
                'pid' => '4',
                'comp' => '0',
                'place' => '宅配',
                'timelimit' => '2020年12月22日17時00分',
                'cold' => '常温',
                'portdate' => '0',
                'delidate' => '2020年12月25日',
                'delitime' => '指定なし',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '6',
                'tensu' => '5',
                'otime' => '2020年12月20日20時45分',
                'item_total' => '6200',
                'dprice' => '0',
                'uid' => '5',
                'uname' => 'ごろうまる',
                'pid' => '1',
                'comp' => '0',
                'place' => '宅配',
                'timelimit' => '2020年12月21日17時00分',
                'cold' => '冷蔵',
                'portdate' => '0',
                'delidate' => '2020年12月24日',
                'delitime' => '午前中',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '7',
                'tensu' => '3',
                'otime' => '2020年12月20日21時00分',
                'item_total' => '31000',
                'dprice' => '0',
                'uid' => '2',
                'uname' => 'にしやま',
                'pid' => '2',
                'comp' => '0',
                'place' => '宅配',
                'timelimit' => '2020年12月25日17時00分',
                'cold' => '冷凍',
                'portdate' => '0',
                'delidate' => '2020年12月28日',
                'delitime' => '午前中',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '8',
                'tensu' => '3',
                'otime' => '2020年12月20日21時30分',
                'item_total' => '9600',
                'dprice' => '0',
                'uid' => '3',
                'uname' => 'みむら',
                'pid' => '3',
                'comp' => '0',
                'place' => '空港',
                'timelimit' => '2020年12月30日19時00分',
                'cold' => '常温',
                'portdate' => '2020年12月30日20時',
                'delidate' => '0',
                'delitime' => '0',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '9',
                'tensu' => '5',
                'otime' => '2020年12月20日21時40分',
                'item_total' => '5000',
                'dprice' => '0',
                'uid' => '6',
                'uname' => 'むつごろう',
                'pid' => '2',
                'comp' => '1',
                'place' => '空港',
                'timelimit' => '2020年12月22日16時00分',
                'cold' => '常温',
                'portdate' => '2020年12月22日17時',
                'delidate' => '0',
                'delitime' => '0',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            ]);
    }
}
