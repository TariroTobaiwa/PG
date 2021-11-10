<?php

namespace Tests\Feature;
use App\Models\MovieTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InsertionTest extends TestCase
{
    /**
     * Feature tests for our REST API end-points
     *
     * @return void
     */

    public function test_that_a_movie_can_be_added()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/api/movie_test/store', [
            'title' => 'Missing in Action',
            'plot' => 'Ten years after his escape from the Vietnamese camp, Colonel Braddock decides to return and free the remaining prisoners.',
            'director' => 'Joseph Zito',
            'year_released' => '1984',
            'leading_actors' => 'Chuck Norris',
            'imdb_url' => 'https://www.imdb.com/title/tt0087727/',
            'imdb_score' => '5.5'
        ]);
        $response->assertStatus(200);
        $this->assertTrue(count(MovieTest::all()) > 1);
    }

    public function test_that_a_movie_can_be_deleted()
    {
        $this->withoutExceptionHandling();
        MovieTest::factory()->times(5)->create(); // create 5 movies using the factory setup above
        $id_to_be_deleted = random_int(1, 100); // select a random movie
        $response = $this->delete("/api/movie_test/$id_to_be_deleted/"); // send a request to delete it
        $response->assertStatus(410); // assert that the movie deleted previouly does not exist in the database anymore [success = HTTP code 200].
    }

    public function test_that_a_movie_can_be_updated(){
        $this->withoutExceptionHandling();
        $movie_id = MovieTest::create([
            'title' => 'Code of Silence',
            'plot' => 'A Chicago cop is caught in the middle of a gang war while his own comrades shun him because he wants to take down an irresponsible cop.',
            'director' => 'Andrew David',
            'year_released' => '1985',
            'leading_actors' => 'Chuck Norris, Henry Silva, Bert Remsen, Mike Genovese',
            'imdb_url' => 'https://www.imdb.com/title/tt0088936/',
            'imdb_score' => '0'
        ])->id; // create a movie and store the id in the $movie_id variable
        $response = $this->put("/api/movie_test/$movie_id/", ['imdb_score' => '6']); //sends a patch request in order to complete the created movie
        $response->assertStatus(200); // assert that the movie is now marked as updated in the database
      }

}
