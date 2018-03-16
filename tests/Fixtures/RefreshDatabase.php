<?php

namespace MichaelLurquin\UserProfile\Tests\Fixtures;

use Illuminate\Database\Capsule\Manager as DB;

trait RefreshDatabase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        $db = new DB;
        $db->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
        ]);
        $db->bootEloquent();
        $db->setAsGlobal();

        DB::schema()->create('users', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function tearDown()
    {
        DB::schema()->drop('users');
    }

    /**
     * Create User model.
     *
     * @return User
     */
    public function createUser() : User
    {
        return User::create([
            'name' => 'john Doe',
            'email' => 'john.doe@example.org',
        ]);
    }
}