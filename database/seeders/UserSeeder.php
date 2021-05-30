<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'           => Uuid::uuid4(),
                'nama' => 'Siswa Berkarya',
                'nomor_peserta'      => '03-200-206-001',
                'tempat_lahir'       => 'Solo',
                'tanggal_lahir'       => '1990-02-29',
                'jenis_kelamin'       => 'L',
                'program_studi'       => 1,
                'nis'       => '4000',
                'nisn'       => '1234567890',
                'kelas'       => 'XII TKJ A',
                'is_pass'       => true,
                'tahun_lulus'       => '2009',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now()
            ],

        ]);
    }
}
