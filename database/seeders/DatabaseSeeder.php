<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\Perusahaan::create([
            'company_name'    => 'RSUP Prof. IGNG Ngoerah',
            'company_email'   => 'info@rsupsanglah.id',
            'company_address' => 'Denpasar',
            'company_phone'   => '123456',
        ]);
        \App\Models\User::factory()->create([
            'name'       => 'Administrator',
            'company_id' => 1,
            'username'   => 'admin@asta.co.id',
        ]);
        \App\Models\Aspek::create([
            'nama_aspek'       => 'Kinerja',
            'company_id'        => 1,
            'keterangan_aspek' => '-',
            'bobot'            => 60,
        ]);
        \App\Models\Aspek::create([
            'nama_aspek'       => 'Pribadi',
            'company_id'        => 1,
            'keterangan_aspek' => '-',
            'bobot'            => 40,
        ]);
    }
}
