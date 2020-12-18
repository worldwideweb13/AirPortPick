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

        ]);
    }
}
