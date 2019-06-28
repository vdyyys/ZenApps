<?php

use Illuminate\Database\Seeder;
use App\Kategori;
class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create(['nama_kategori' => 'concert']);
        Kategori::create(['nama_kategori' => 'party']);
        Kategori::create(['nama_kategori' => 'wedding']);
        Kategori::create(['nama_kategori' => 'conference']);
        Kategori::create(['nama_kategori' => 'rental']);
        Kategori::create(['nama_kategori' => 'catering']);
    }
}
