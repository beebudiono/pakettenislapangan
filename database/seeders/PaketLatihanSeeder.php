<?php

namespace Database\Seeders;

use App\Models\BiodataPelatih;
use App\Models\PaketLatihan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketLatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainer = User::where("email", "trainer@gmail.com")->first();

        $paket = PaketLatihan::create([
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
        ]);

        BiodataPelatih::create([
            'nama_pelatih1'   => "Jurgen Klop",
            'nama_pelatih2'   => "Ten Hag",
            'nama_pelatih3'   => "Pep",
            'nama_asisten1'   => "Ancelotti",
            'nama_asisten2'   => "Simione",
            'nama_asisten3'   => 'Inzaghi',
            'nama_ballboy1'   => "Hojlund",
            'nama_ballboy2'   => "Pacundo",
            'nama_ballboy3'   => "Garnacho",
            'materi'          => "Kata tenis berasal dari bahasa Prancis “tenez” yang artinya kerjakan atau bersiap. Olahraga ini sebenarnya diyakini sudah mulai dimainkan sejak zaman sebelum Masehi. Namun catatan tertua menyebut kegiatan tenis lapangan berasal dari abad ke-11.
            Pada waktu tersebut, masyarakat Prancis tercatat sudah sering melakukan permainan bernama jeu de peume yang caranya mirip dengan tenis lapangan modern. Lalu pada abad ke-13, permainan tersebut mulai tersebar ke negara-negara lain di Eropa.",
            'peralatan'       => "Tennis",
            'paket_id'        => $paket->id,
            'main_trainer_id' => $trainer->id
        ]);
    }
}
