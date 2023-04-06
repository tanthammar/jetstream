<?php

namespace Laravel\Jetstream\Contracts;

interface UpdatesTeamNames
{
    /**
     * Validate and update the given team's name.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @return void
     */
    public function update($user, $team, array $input);
}
