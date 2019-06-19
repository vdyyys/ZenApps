<?php

use Illuminate\Database\Seeder;
use App\Pesan;

class pesanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesan::create(['pesan' => 'Pesanan anda sedang di proses']);
        Pesan::create(['pesan' => 'Anda mendapat pesanan dari']);
        Pesan::create(['pesan' => 'Pesanan anda mendapat persetujuan']);
        Pesan::create(['pesan' => 'Mohon maaf, pesanan anda tidak mendapat persetujuan dikarenakan perbedaan kesepakatan tanggal']);
        Pesan::create(['pesan' => 'Silahkan membayar DP (Down Payment) atau Uang Muka']);
        Pesan::create(['pesan' => 'Pembayaran DP (Down Payment) telah diterima']);
        Pesan::create(['pesan' => 'Besok acaramu akan berlangsung, untuk itu silahkan melakukan pelunasan.']);
        Pesan::create(['pesan' => 'Pembayaran pelunasanmu telah diterima. Terimakasih telah bertransaksi dengan kami']);
    }
}
