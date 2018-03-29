<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Car;

class DataTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDataTypeInt()
    {
        $car = Car::inRandomOrder()->first();
        $year = (int)$car->year;
        $this->assertInternalType(IsType::TYPE_INT, $year);
    }
    public function testMake()
    {
        $car = Car::inRandomOrder()->first();
        $make = $car->make;
        $this->assertContains($make, ["Honda", "Ford", "Toyota"]);
    }
    public function testDataTypeString()
    {
        $car = Car::inRandomOrder()->first();
        $model = $car->model;
        $this->assertInternalType(IsType::TYPE_STRING, $model);
    }
}
