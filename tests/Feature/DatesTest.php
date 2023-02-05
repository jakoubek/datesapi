<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatesTest extends TestCase
{
    /**
     * Tests today.
     *
     * @return void
     */
    public function test_today()
    {
        $response = $this->get('/today');

        $response->assertStatus(200);
    }

    /**
     * Tests tomorrow.
     *
     * @return void
     */
    public function test_tomorrow()
    {
        $response = $this->get('/tomorrow');

        $response->assertStatus(200);
    }

    /**
     * Tests yesterday.
     *
     * @return void
     */
    public function test_yesterday()
    {
        $response = $this->get('/yesterday');

        $response->assertStatus(200);
    }

    /**
     * Tests this year.
     *
     * @return void
     */
    public function test_this_year()
    {
        $response = $this->get('/this-year');

        $response->assertStatus(200);
    }

    /**
     * Tests next year.
     *
     * @return void
     */
    public function test_next_year()
    {
        $response = $this->get('/next-year');

        $response->assertStatus(200);
    }

    /**
     * Tests last year.
     *
     * @return void
     */
    public function test_last_year()
    {
        $response = $this->get('/last-year');

        $response->assertStatus(200);
    }

    /**
     * Tests this month.
     *
     * @return void
     */
    public function test_this_month()
    {
        $response = $this->get('/this-month');

        $response->assertStatus(200);
    }

    /**
     * Tests next month.
     *
     * @return void
     */
    public function test_next_month()
    {
        $response = $this->get('/next-month');

        $response->assertStatus(200);
    }

    /**
     * Tests last month.
     *
     * @return void
     */
    public function test_last_month()
    {
        $response = $this->get('/last-month');

        $response->assertStatus(200);
    }

    /**
     * Tests timestamp.
     *
     * @return void
     */
    public function test_timestamp()
    {
        $response = $this->get('/timestamp');

        $response->assertStatus(200);
    }


}
