<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PasienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
        Pasien::create([
            'pasien'            => $faker->name,
            'alamat'            => $faker->address,
            'telepon'           => $faker->phoneNumber,
            'id_rumah_sakit'    => rand(1, 5),
        ]);
    }
}
