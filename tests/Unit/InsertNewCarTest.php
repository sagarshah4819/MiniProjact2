<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;
class InsertNewCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertNewCar()
    {

        $carinsert= new Car();
        $carinsert->make = 'Toyota';
        $carinsert->model = 'Sedan';
        $carinsert->year = '2014';
        $this->assertTrue($carinsert->save());

    }
}
