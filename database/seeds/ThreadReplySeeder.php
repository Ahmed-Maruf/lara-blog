<?php

use App\Thread;
use App\Reply;
use Illuminate\Database\Seeder;

class ThreadReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Thread::class, 50)->create()->each(function ($thread) {
            factory(Reply::class, 10)->create(['thread_id' => $thread->id]);
        });
    }
}
