<?php

namespace Laravel\Jetstream\Contracts;

interface AddsTeamMembers
{
    /**
     * Add a new team member to the given team.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @return void
     */
    public function add($user, $team, string $email, string $role = null);
}
