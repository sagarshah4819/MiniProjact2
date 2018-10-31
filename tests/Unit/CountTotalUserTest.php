<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class CountTotalUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountTotalUser()
    {

        $user = User::all();
        $UserCount = $user->count();
        $this->assertEquals(50, $UserCount);

    }
}
