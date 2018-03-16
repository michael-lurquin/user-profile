<?php

namespace MichaelLurquin\UserProfile\Tests;

use MichaelLurquin\UserProfile\Tests\Fixtures\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class UserProfileTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function testUpdateProfileFailed()
    {
        $user = $this->createUser();

        $this->assertEquals('John Doe', $user->name);
    }
}