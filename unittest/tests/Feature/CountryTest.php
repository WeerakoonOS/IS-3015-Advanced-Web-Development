<?php

namespace Tests\Feature;

use App\Country;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountryTest extends TestCase
{
    use DatabaseTransactions;
    /** @test */
    public function user_can_create_a_Country()
    {
        $country=factory(Country::class)->make();
        $this->post('/api/countries',$country->toArray());
        $this->assertEquals(1,Country::count());
    }
}
