<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('student')->insert([
        //     'name'=> 'anjing',
        //     'addres'=>'kaliurang',
        //     'phone_number'=>'08211111',
        //     'class'=>'tkj2',
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now()
        // ]);
        Student::insert([
            'name'=> 'anjing4',
            'addres'=>'kaliurang',
            'phone_number'=>'08211111',
            'class'=>'tkj2',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
