<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PaketLatihan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(
            UserRolePermissionSeeder::class,
        );

        PaketLatihan::create([
            'nama_paket'  => 'Paket A',
            'jml_pelatih' => 10,
            'jml_asisten' => 90,
            'jml_ballboy' => 3,
            'tgl_start'   => '2023-08-01',
            'tgl_end'     => '2023-10-31',
            'time_start'  => Carbon::now()->format("H:i:s"),
            'time_end'    => Carbon::now()->format("H:i:s"),
            'durasi'      => 4,
            'harga'       => 6000000,
            'kuota'       => 50,
            'status'      => 'aktif',
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
