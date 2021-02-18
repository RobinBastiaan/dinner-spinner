<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends BaseFixture
{
    protected function loadData(ObjectManager $manager): void
    {
        $this->createMany(5, 'users', function ($i) {
            $user = new User();
            $user->setEmail(sprintf('dummy%d@example.com', $i));
            $user->setPassword('');
            $user->setName($this->faker->name);

            return $user;
        });

        $manager->flush();
    }
}
