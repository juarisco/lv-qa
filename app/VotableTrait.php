<?php

namespace App;

trait VotableTrait
{

    /**
     * Get all of the votes for the answer.
     */
    public function votes()
    {
        return $this->morphToMany(User::class, 'votable');
    }

    public function upVotes()
    {
        return $this->votes()->wherePivot('vote', 1);
    }

    public function downVotes()
    {
        return $this->votes()->wherePivot('vote', -1);
    }
}
