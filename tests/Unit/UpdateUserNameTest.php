<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateUserNameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUserName()
    {
        $updateuser = User::find(1);
        $updateuser->name = 'Steve Smith';
        $this->assertTrue($updateuser->save());

    }
}
