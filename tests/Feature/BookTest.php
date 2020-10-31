<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_get_books()
    {
        $response = $this->getJson('/');

        $response->assertStatus(200);
        $response->assertJsonStructure(['data' => [['id', 'title', 'author']]]);
    }
}
