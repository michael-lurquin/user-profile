<?php

namespace MichaelLurquin\UserProfile\Tests\Fixtures;

use MichaelLurquin\UserProfile\UserProfile;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    use UserProfile;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];
}