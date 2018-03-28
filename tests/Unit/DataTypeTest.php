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
    public function testDataType()
    {
        $car = Car::inRandomOrder()->first();
        $year = (int)$car->year;
        $this->assertInternalType(IsType::TYPE_INT, $year);
    }
}
