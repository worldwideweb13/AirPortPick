<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            [
                'iid' => '1',
                'icate' => 'お菓子',
                'iname' => '白き恋人',
                'iprice' => '1000',
                'itext' => 'お土産の定番です',
                'pic' => '1',
                'shop' => 'スカイストア小笠原',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '2',
                'icate' => 'お菓子',
                'iname' => '十勝銘菓あんばたーさん',
                'iprice' => '1100',
                'itext' => 'お土産の新定番です',
                'pic' => '2',
                'shop' => '北のお菓子柳つき',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '3',
                'icate' => '食品/飲料',
                'iname' => '(大)生チーズ',
                'iprice' => '1500',
                'itext' => '手作りにこだわった生チーズです',
                'pic' => '3',
                'shop' => 'きのらんど',
                'cold' => '冷蔵',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
