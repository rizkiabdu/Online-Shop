<?php

namespace Webkul\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Webkul\User\Models\Admin;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'     => "RIZKI ABDUL PATAH",
            'email'    => 'rizkiabdulpatah618@gmail.com',
            'password' => bcrypt('password'),
            'role_id'  => 1,
            'status'   => 1,
        ];
    }
}
