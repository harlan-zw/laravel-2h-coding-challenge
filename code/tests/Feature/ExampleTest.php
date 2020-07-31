<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalc()
    {
        $response = $this->post('/calculate', [
            'hours_worked_per_week' => 10,
            'hourly_rate' => 100,
        ]);

        $response->assertJson([
            'Weekly' => 1000,
            'Fortnightly' => 1865,
            'Monthly' => 3595,
            'Yearly' => 45115,
        ]);
    }
}
