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

        $deleteuser= new User();
        $deleteuser->name = 'RandomUser';
        $deleteuser->email = 'abcd@xyz.com';
        $deleteuser->password = 'random';
        $deleteuser->save();
        $this->assertTrue($deleteuser->delete());

    }
}
