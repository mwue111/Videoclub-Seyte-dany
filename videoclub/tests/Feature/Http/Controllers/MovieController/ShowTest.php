<?php

namespace Tests\Feature\Http\Controllers\MovieController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Movie;

class ShowTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_it_shows_the_movie_data(): void
    {
        $movie = Movie::factory()->create();

        $this->get(route('peliculas.show', $movie))
            ->assertStatus(200)
            ->assertSee($movie->title);
            //->assertSee(route('peliculas.index'));
    }
}
