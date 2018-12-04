<?php

namespace Domain\Post\Actions;

use Domain\Post\Models\Post;

class UpdateVoteCountAction
{
    public function execute(Post $post): Post
    {
        $post->vote_count = $post->votes()->count();

        $post->save();

        return $post->refresh();
    }
}