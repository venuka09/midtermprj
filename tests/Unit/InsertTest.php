<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {
        $user = new User();
        $user->name = 'Venuka';
        $user->email = 'vv356@njit.com';
        $user->password = 'venuka09';

        $this->assertTrue($user->save());
    }
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = 'Ford';
        $car->model = 'ExtraLuxury';
        $car->year = '2015';

        $this->assertTrue($car->save());
    }
}
