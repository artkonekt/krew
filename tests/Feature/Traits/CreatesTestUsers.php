<?php

namespace Konekt\Krew\Tests\Feature\Traits;

use Konekt\User\Models\UserProxy;

trait CreatesTestUsers
{
    protected $userOne;
    protected $userTwo;
    protected $userThree;

    protected function createTestUsers()
    {
        $this->userOne   = UserProxy::create(['name' => $this->faker->name]);
        $this->userTwo   = UserProxy::create(['name' => $this->faker->name]);
        $this->userThree = UserProxy::create(['name' => $this->faker->name]);
    }
}
