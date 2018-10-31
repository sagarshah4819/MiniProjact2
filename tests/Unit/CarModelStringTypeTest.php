<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarModelStringTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelStringType()
    {

        $car = car::inRandomOrder()->first();
        $modeltype = $car->Model;
        $this->assertInternalType("string", $modeltype);

    }
}
