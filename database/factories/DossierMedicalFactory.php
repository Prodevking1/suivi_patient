<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DossierMedicalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'n_patient' => $this->faker->sentence(1),
            'p_patient' => $this->faker->sentence(2),
            'tel_patient' => $this->faker->numerify(52124881),
            'adr_patient' => $this->faker->sentence(3),
            'sit_mat' => $this->faker->sentence(3),
            'ant_med' => $this->faker->sentence(3),
            'm_rec' => $this->faker->sentence(3),
            'grp_san' => $this->faker->sentence(3),
            'al_med' => $this->faker->sentence(3),
            'vacc' => $this->faker->sentence(3),
            'ser' => $this->faker->sentence(3),
            'poids' => $this->faker->numerify(50, 200),
            'oper' => $this->faker->sentence(3),
            'electro' => $this->faker->sentence(3),
            'sex_patient' => $this->faker->lexify('M', 'F'),
            'date_rdv' => $this->faker->dateTimeBetween(),
            'date_cons' => $this->faker->dateTimeBetween(),

        ];
    }
}
