<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Picker;

class PickerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Picker::insert([
            [
                'pid' => '1',
                'ppass' => '111',
                'pname' => 'いしがみ',  
            ],
            [
                'pid' => '2',
                'ppass' => '222',
                'pname' => 'にしだ',  
            ],
            [
                'pid' => '3',
                'ppass' => '333',
                'pname' => 'みおり',  
            ],
            [
                'pid' => '4',
                'ppass' => '444',
                'pname' => 'しむら',  
            ]
        ]);
    }
}
