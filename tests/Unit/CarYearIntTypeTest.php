<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;
class CarYearIntTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearIntType()
    {

        $car = car::inRandomOrder()->first();
        $caryear = (int)$car->Year;
        $this->assertInternalType("int", $caryear);

    }
}
