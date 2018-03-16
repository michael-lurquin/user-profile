<?php

namespace MichaelLurquin\UserProfile;

trait UserProfile
{
    /**
     * Get the user's name.
     *
     * @param  string  $value
     * @return string
     */
    public function GetNameAttribute(string $value) : string
    {
        return ucfirst($value);
    }
}