<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Data;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sws = new Data;
        $sws ->ni = "1461800"; 
        $sws->nama = "Ade Prasetyo"; 
        $sws->id_kelas = "2"; 
        $sws->save(); 
    }
}
