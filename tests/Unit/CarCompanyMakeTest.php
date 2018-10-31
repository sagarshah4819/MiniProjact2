<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;
class CarCompanyMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCompanyMake()
    {

        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->Make, ["Honda", "Ford", "Toyota"]);
    }
}
