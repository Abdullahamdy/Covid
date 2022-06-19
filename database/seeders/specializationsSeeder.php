<?php

namespace Database\Seeders;

use App\Models\Specialtie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class specializationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->delete();
        
        Specialtie::create(['specialties'=>'الباطنه','specialties_about'=>'هذا التخصص خاص بالباطنه']);
        Specialtie::create(['specialties'=>'القلب','specialties_about'=>'هذا التخصص خاص القلب']);
        Specialtie::create(['specialties'=>'الاوعيه الدموية','specialties_about'=>'هذا التخصص خاص بالاوعيه الدموية']);
        Specialtie::create(['specialties'=>'التخدير','specialties_about'=>'هذا التخصص خاص بالتخدير']);

    }
}
