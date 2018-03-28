<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountUser()
    {
        $users =User::all();
        $recordCount = $users->count();
        $this->assertEquals(50, $recordCount);
    }
}
