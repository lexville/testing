<?php

use App\User;
use App\Post;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewUsersPostsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testCanViewUsersPosts()
    {
        $user = factory(User::class)->create([
            'name' => 'hordor',
        ]);

        factory(Post::class, 5)->create();

        $post = factory(User::class)->make([
            'post' => 'Hurray my very first post'
        ]);

        $user->posts()->save($post);

        $this->visit('/posts')
            ->see('Hurray my very first post');

        $allPosts = Post::all();

        $this->count(6, $allPosts);
    }
}
