<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;
class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarDelete()
    {

        $car= new car();
        $car->make = 'Ford';
        $car->model = 'SUV';
        $car->year = '1995';
        $car->save();
        $this->assertTrue($car->delete());

    }
}
