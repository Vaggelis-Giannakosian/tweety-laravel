<?php


namespace App;


trait Likable
{
    public function like(?User $user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id()
            ],
            [
                'liked' => $liked
            ]
        );
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user, $liked = true)
    {
        return (bool)$user->likes->where('tweet_id', $this->id)->where('liked', $liked)->count();
    }

    public function isDislikedBy(User $user)
    {
        return $this->isLikedBy($user, false);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
