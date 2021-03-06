<?php

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
            [
              'id'  			=> 1,
              'user_id'  		=> 1,
              'nim'				=> 10000353,
              'nama' 			=> 'Admin GC',
              'tempat_lahir'	=> 'Banjarmasin',
              'tgl_lahir'		=> '2018-01-01',
              'jk'				=> 'L',
              'jurusan'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'user_id'  		=> 2,
              'nim'				=> 10000375,
              'nama' 			=> 'User GC',
              'tempat_lahir'	=> 'Banjarmasin',
              'tgl_lahir'		=> '2019-01-01',
              'jk'				=> 'L',
              'jurusan'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
