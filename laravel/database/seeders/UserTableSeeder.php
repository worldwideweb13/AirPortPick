<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'uid' => '1',
                'upass' => '111',
                'uname' => 'いしい',  
                'address' => '東京都',
                'phone' => '00011112222',
                'birth' => '1990/01/01',  
                'splace1' => '沖縄県',  
                'splace2' => '愛知県',
                'splace3' => '島根県',  
            ],
            [
                'uid' => '2',
                'upass' => '222',
                'uname' => 'にしやま',  
                'address' => '神奈川県',
                'phone' => '00011112222',
                'birth' => '1991/01/01',  
                'splace1' => '大阪府',  
                'splace2' => '宮城県',
                'splace3' => '石川県',    
            ],
            [
                'uid' => '3',
                'upass' => '333',
                'uname' => 'みむら',  
                'address' => '千葉県',
                'phone' => '00011112222',
                'birth' => '1992/01/01',  
                'splace1' => '群馬県',  
                'splace2' => '広島県',
                'splace3' => '熊本県',   
            ],
            [
                'uid' => '4',
                'upass' => '444',
                'uname' => 'しょうじ',  
                'address' => '奈良県',
                'phone' => '00011112222',
                'birth' => '1994/04/04',  
                'splace1' => '岡山県',  
                'splace2' => '大分県',
                'splace3' => '鳥取県',   
            ],
            [
                'uid' => '5',
                'upass' => '555',
                'uname' => 'ごろうまる',  
                'address' => '長野県',
                'phone' => '00011112222',
                'birth' => '1995/05/05',  
                'splace1' => '長野県',  
                'splace2' => '岐阜県',
                'splace3' => '青森県',   
            ],
            [
                'uid' => '6',
                'upass' => '666',
                'uname' => 'むつごろう',  
                'address' => '北海道',
                'phone' => '00011112222',
                'birth' => '1940/01/01',  
                'splace1' => '東京都',  
                'splace2' => '群馬県',
                'splace3' => '滋賀県',   
            ],
            [
                'uid' => '7',
                'upass' => '777',
                'uname' => 'ななせ',  
                'address' => '福島県',
                'phone' => '00011112222',
                'birth' => '1997/01/01',  
                'splace1' => '山口県',  
                'splace2' => '鹿児島県',
                'splace3' => '新潟県',   
            ],

        ]);
    }
}
