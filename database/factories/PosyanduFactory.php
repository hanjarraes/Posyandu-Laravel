<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posyandu>
 */
class PosyanduFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_posyandu' => $this->faker->name(),
            'email' => fake()->unique()->safeEmail(),
            'no_telp' => $this->faker->phoneNumber(),
            'no' => $this->faker->e164PhoneNumber(),
            'kader' => $this->faker->streetName(),
            'alamat_lengkap' => $this->faker->address(),
            'keterangan' => $this->faker->text(),
            'img' => $this->faker->imageUrl(640, 480, 'animals', true),
            'jam_operasi' => $this->faker->dayOfWeek(),
            'map' => 'https://goo.gl/maps/LLBEATB7LkQUy7xp9',
            'id_provinsi' => 1,
            'id_kabupaten' => 1,
            'id_kecamatan' => 1,
            'id_user' => 1
        ];
    }
}
