<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

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
}
