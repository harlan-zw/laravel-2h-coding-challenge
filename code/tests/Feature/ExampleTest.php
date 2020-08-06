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
            'hourly_rate' => 300,
        ]);

        $response->assertJson([
            'Week' => 3000,
            'Fortnight' => 5325,
            'Month' => 10515,
            'Year' => 135075,
        ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalc2()
    {
        $response = $this->post('/calculate', [
            'hours_worked_per_week' => 40,
            'hourly_rate' => 150,
        ]);

        $response->assertJson([
            'Week' => 6000,
            'Fortnight' => 10515,
            'Month' => 20895,
            'Year' => 270015,
        ]);
    }
}
