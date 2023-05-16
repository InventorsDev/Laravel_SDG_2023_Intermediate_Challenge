<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AlgorithmTest extends TestCase
{
    public function testGetMaxSum()
    {
        // Test with an empty array
        $response = $this->getJson('/fetch_get_sum?arr=');
        $response->assertStatus(200)->assertExactJson(['result' => 0]);

        // Test with an array containing only negative integers
        $response = $this->getJson('/fetch_get_sum?arr=-1,-2,-3');
        $response->assertStatus(200)->assertExactJson(['result' => 0]);

        // Test with a single positive integer
        $response = $this->getJson('/fetch_get_sum?arr=5');
        $response->assertStatus(200)->assertExactJson(['result' => 5]);

        // Test with an array of positive integers
        $response = $this->getJson('/fetch_get_sum?arr=1,2,3,4');
        $response->assertStatus(200)->assertExactJson(['result' => 10]);

        // Test with an array containing positive and negative integers
        $response = $this->getJson('/fetch_get_sum?arr=-2,1,-3,4,-1,2,1,-5,4');
        $response->assertStatus(200)->assertExactJson(['result' => 6]);
    }


    /**
     * Test the /get_unique_char endpoint with various input strings.
     *
     * @return void
     */
    public function testUniqueChars()
    {
        // Test with an empty string
        $response = $this->getJson('/get_unique_char?input=');
        $response->assertStatus(200)->assertExactJson(['result' => '']);

        // Test with a string containing only whitespaces
        $response = $this->getJson('/get_unique_char?input=    ');
        $response->assertStatus(200)->assertExactJson(['result' => '']);

        // Test with a string containing unique characters
        $response = $this->getJson('/get_unique_char?input=hello');
        $response->assertStatus(200)->assertExactJson(['result' => 'helo']);

        // Test with a string containing duplicate characters
        $response = $this->getJson('/get_unique_char?input=abracadabra');
        $response->assertStatus(200)->assertExactJson(['result' => 'abrcd']);

        // Test with a string containing special characters
        $response = $this->getJson('/get_unique_char?input=@@@!!!###');
        $response->assertStatus(200)->assertExactJson(['result' => '@#!']);
    }
}
