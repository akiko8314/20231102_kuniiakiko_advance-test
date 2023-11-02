<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first-name' => '山田',
            'family-name' => '太郎',
            'gender' => '男性',
            'email' => 'a@a.com',
            'post' => '111-1111',
            'address' => '東京',
            'type' => 'a',
            'content' => 'a'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first-name' => '山田',
            'family-name' => '次郎',
            'gender' => '男性',
            'email' => 'b@a.com',
            'post' => '222-2222',
            'address' => '東京',
            'type' => 'b',
            'content' => 'b'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first-name' => '田中',
            'family-name' => '太郎',
            'gender' => '男性',
            'email' => 'c@a.com',
            'post' => '333-3333',
            'address' => '東京',
            'type' => 'c',
            'content' => 'c'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first-name' => '山田',
            'family-name' => '三朗',
            'gender' => '男性',
            'email' => 'c@a.com',
            'post' => '333-1234',
            'address' => '東京',
            'type' => 'd',
            'content' => 'd'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first-name' => '山田',
            'family-name' => '四郎',
            'gender' => '男性',
            'email' => 'e@a.com',
            'post' => '222-333',
            'address' => '東京',
            'type' => 'e',
            'content' => 'e'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first-name' => '山田',
            'family-name' => '五郎',
            'gender' => '男性',
            'email' => 'f@a.com',
            'post' => '123-2222',
            'address' => '東京',
            'type' => 'f',
            'content' => 'f'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first-name' => '山田',
            'family-name' => '六郎',
            'gender' => '男性',
            'email' => 'g@a.com',
            'post' => '124-2222',
            'address' => '東京',
            'type' => 'g',
            'content' => 'g'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first-name' => '山田',
            'family-name' => '七郎',
            'gender' => '男性',
            'email' => 'g@a.com',
            'post' => '125-2222',
            'address' => '東京',
            'type' => 'h',
            'content' => 'h'
        ];
    }
}
