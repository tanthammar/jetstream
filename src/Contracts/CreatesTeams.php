<?php

namespace Laravel\Jetstream\Contracts;

interface CreatesTeams
{
    /**
     * Validate and create a new team for the given user.
     *
     * @param  mixed  $user
     * @return mixed
     */
    public function create($user, array $input);
}
