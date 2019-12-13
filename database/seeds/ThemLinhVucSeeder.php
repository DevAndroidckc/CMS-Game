<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linhvuc')->insert([
        	['ten_linh_vuc'=>'Doraemon'],
        	['ten_linh_vuc'=>'Nobita'],
        	['ten_linh_vuc'=>'Shizuka'],
        	['ten_linh_vuc'=>'Jaian'],
        	['ten_linh_vuc'=>'Suneo']
        	]);
    }
}
