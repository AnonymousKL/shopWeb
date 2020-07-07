<?php

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
        // $this->call(UserSeeder::class);
         $this->call(DanhMuc::class);
    }
}
class DanhMuc extends Seeder
{
    public function run()
    {
        DB::table('danh_mucs')->insert([
            ['ten' => 'Áo Nam'],
            ['ten' => 'Áo Nữ'],
            ['ten' => 'Quần Nam'],
            ['ten' => 'Quần Nữ'],
            ['ten' => 'Mũ'],
            ['ten' => 'Đồ Cặp'],
            ['ten' => 'Giày Dép']
        ]);
    }
}