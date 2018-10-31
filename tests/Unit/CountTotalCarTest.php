<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;
class CountTotalCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountTotalCar()
    {

        $car = car::all();
        $carCount = $car->count();
        $this->assertEquals(50,$carCount);

    }
}
