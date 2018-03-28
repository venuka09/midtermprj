<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user = new User();
        $user->name = 'Venuka';
        $user->email = 'vv356@nji.com';
        $user->password = 'venuka09';
        $user->save();

        $this->assertTrue($user->delete());
    }
    public function testDeleteCar()
    {
        $car = new Car();
        $car->make = 'Toyota';
        $car->model = 'Luxury';
        $car->year = '2010';
        $car->save();

        $this->assertTrue($car->delete());
    }
}
