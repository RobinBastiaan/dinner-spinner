<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends BaseFixture
{
    private $userPasswordEncoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    protected function loadData(ObjectManager $manager): void
    {
        $this->createMany(5, 'users', function ($i) {
            $user = new User();
            $user->setEmail(sprintf('dummy%d@example.com', $i));
            $user->setPassword($this->userPasswordEncoder->encodePassword($user, 'gogogo'));
            $user->setName($this->faker->name);

            return $user;
        });

        $manager->flush();
    }
}
