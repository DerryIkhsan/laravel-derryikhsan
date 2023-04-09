<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RumahSakit;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RumahSakitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        RumahSakit::create([
            'rumah_sakit'   => $faker->name.' Hospital',
            'alamat'        => $faker->address,
            'email'         => $faker->email,
            'telepon'       => $faker->phoneNumber,
        ]);
        RumahSakit::create([
            'rumah_sakit'   => $faker->name.' Hospital',
            'alamat'        => $faker->address,
            'email'         => $faker->email,
            'telepon'       => $faker->phoneNumber,
        ]);
        RumahSakit::create([
            'rumah_sakit'   => $faker->name.' Hospital',
            'alamat'        => $faker->address,
            'email'         => $faker->email,
            'telepon'       => $faker->phoneNumber,
        ]);
        RumahSakit::create([
            'rumah_sakit'   => $faker->name.' Hospital',
            'alamat'        => $faker->address,
            'email'         => $faker->email,
            'telepon'       => $faker->phoneNumber,
        ]);
        RumahSakit::create([
            'rumah_sakit'   => $faker->name.' Hospital',
            'alamat'        => $faker->address,
            'email'         => $faker->email,
            'telepon'       => $faker->phoneNumber,
        ]);
    }
}
