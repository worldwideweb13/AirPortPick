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
                'otime' => '2020年12月20日18時30分',
                'item_total' => '40000',
                'dprice' => '0',
                'uid' => '1',
                'pid' => '1',
                'place' => '空港',
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
                'otime' => '2020年12月20日20時00分',
                'item_total' => '28000',
                'dprice' => '0',
                'uid' => '2',
                'pid' => '2',
                'place' => '宅配',
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
                'otime' => '2020年12月20日20時17分',
                'item_total' => '8000',
                'dprice' => '0',
                'uid' => '3',
                'pid' => '3',
                'place' => '宅配',
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
                'otime' => '2020年12月20日20時30分',
                'item_total' => '12800',
                'dprice' => '0',
                'uid' => '1',
                'pid' => '4',
                'place' => '宅配',
                'cold' => '冷蔵',
                'portdate' => '0',
                'delidate' => '2020年12月27日',
                'delitime' => '15-18字',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            [
                'onum' => '5',
                'otime' => '2020年12月20日20時40分',
                'item_total' => '6000',
                'dprice' => '0',
                'uid' => '4',
                'pid' => '4',
                'place' => '宅配',
                'cold' => '冷蔵',
                'portdate' => '0',
                'delidate' => '2020年12月27日',
                'delitime' => '15-18字',
                'paid' => '1',
                'ported' => '0',
                'sent' => '0',
            ],
            ]);
    }
}
