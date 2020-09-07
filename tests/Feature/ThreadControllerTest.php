<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadControllerTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function a_user_can_see_all_threads(){
        $this->withoutExceptionHandling();

        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');
        $response->assertStatus(200);
        $response->assertSee($thread->title);
    }

    /**
     * @test
     **/
    public function a_user_can_see_single_thread()
    {
        $this->withoutExceptionHandling();

        $thread = factory('App\Thread')->create();

        $response = $this->get("/threads/{$thread->id}");

        $response->assertSee($thread->title);
    }


}
