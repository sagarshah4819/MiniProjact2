<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $userinsert=new User();
        $userinsert->name = 'Sagar Shah';
        $userinsert->email = 'ss3958@njit.edu';
        $userinsert->password = 'sagarshah';
        $this->assertTrue($userinsert->save());
    }
}
