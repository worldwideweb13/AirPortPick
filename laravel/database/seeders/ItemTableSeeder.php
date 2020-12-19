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
                'icate' => 'お菓子',
                'iname' => 'さっぽろの学校',
                'iprice' => '1000',
                'itext' => '手作りにこだわったクッキーです',
                'pic' => '3',
                'shop' => 'きのとらや',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '4',
                'icate' => '工芸',
                'iname' => 'ハンドバッグ',
                'iprice' => '40000',
                'itext' => '職人技の光る、メイドイン北海道のカバン',
                'pic' => '4',
                'shop' => 'かばんのヤマザキ',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '5',
                'icate' => 'その他',
                'iname' => '兼松ハッカ',
                'iprice' => '800',
                'itext' => '北見産の天然ハッカ油です。気分スッキリ',
                'pic' => '5',
                'shop' => 'ハッカ一番（いちばん）',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '6',
                'icate' => '食品',
                'iname' => 'カニ詰め合わせ',
                'iprice' => '25000',
                'itext' => 'お鍋用の冷凍カニの詰め合わせです',
                'pic' => '6',
                'shop' => '鈴木水産',
                'cold' => '冷凍',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '7',
                'icate' => '食品',
                'iname' => 'モッツァレラチーズ',
                'iprice' => '2000',
                'itext' => '新鮮な牛乳を使った、こだわりのチーズです',
                'pic' => '7',
                'shop' => 'チーズアカデミー十勝',
                'cold' => '冷蔵',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '8',
                'icate' => '雑貨',
                'iname' => 'ご当地キャラのキーホルダー',
                'iprice' => '800',
                'itext' => 'ここでしか手に入らない限定キーホルダー',
                'pic' => '8',
                'shop' => 'スカイストア小笠原',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '9',
                'icate' => '飲料',
                'iname' => 'アサヒカワビール',
                'iprice' => '2000',
                'itext' => '手作りにこだわるクラフトビール',
                'pic' => '9',
                'shop' => 'スカイストア小笠原',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '10',
                'icate' => '工芸',
                'iname' => '木彫り熊',
                'iprice' => '8000',
                'itext' => 'お土産の定番、木彫り熊です',
                'pic' => '10',
                'shop' => 'カミヤマ物産',
                'cold' => '常温',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '11',
                'icate' => 'お菓子',
                'iname' => '生チーズケーキ',
                'iprice' => '3000',
                'itext' => '新鮮なチーズを使ったチーズケーキ。世界的な賞も受賞！',
                'pic' => '11',
                'shop' => 'お花畑の牧場',
                'cold' => '冷蔵',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'iid' => '12',
                'icate' => 'お菓子',
                'iname' => '氷印の限定アイスクリーム',
                'iprice' => '3000',
                'itext' => '新鮮な牛乳と国産原料で作ったアイスクリーム',
                'pic' => '12',
                'shop' => 'コダマストア',
                'cold' => '冷凍',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
