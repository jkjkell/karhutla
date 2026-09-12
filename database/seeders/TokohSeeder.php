<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tokoh;

class TokohSeeder extends Seeder
{
    public function run(): void
    {
        Tokoh::create([
            'nama' => 'Petugas Pemadam',
            'foto' => '/images/tokoh1.jpg',
            'deskripsi' => 'Petugas yang berperan dalam penanggulangan kebakaran hutan dan lahan.',
            'link' => '#',
            'sumber' => 'ⓘ',
            'status' => 'approved',
            'user_id' => null,
        ]);

        Tokoh::create([
            'nama' => 'Relawan Lingkungan',
            'foto' => '/images/tokoh2.jpg',
            'deskripsi' => 'Relawan yang membantu menjaga lingkungan dan mencegah kebakaran hutan.',
            'link' => '#',
            'sumber' => 'ⓘ',
            'status' => 'approved',
            'user_id' => null,
        ]);

        Tokoh::create([
            'nama' => 'Penjaga Hutan',
            'foto' => '/images/tokoh3.jpg',
            'deskripsi' => 'Berperan dalam perlindungan kawasan hutan dari ancaman kebakaran.',
            'link' => '#',
            'sumber' => 'ⓘ',
            'status' => 'approved',
            'user_id' => null,
        ]);
    }
}