<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {

        $user = new User();
        $user->setEmail("user@token-manager.fr");
        $user->setPassword($this->userPasswordHasher->hashPassword($user, "user@token-manager.fr"));
        $user->setRoles(["ROLE_USER"]);
        $manager->persist($user);

        $userSuper = new User();
        $userSuper->setEmail("super-user@token-manager.fr");
        $userSuper->setPassword($this->userPasswordHasher->hashPassword($userSuper, "super-user@token-manager.fr"));
        $userSuper->setRoles(["ROLE_SUPER_USER"]);
        $manager->persist($userSuper);

        $userAdmin = new User();
        $userAdmin->setEmail("admin@token-manager.fr");
        $userAdmin->setPassword($this->userPasswordHasher->hashPassword($userAdmin, "admin@token-manager.fr"));
        $userAdmin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($userAdmin);
        // for ($i = 0; $i < 50; $i++) {

        //     $product = new Products();
        //     $product->setname('Produit numéro :' . $i);
        //     $product->setDescription('Lorem'. $i);
        //     $manager->persist($product);
        // }

        $manager->flush();
    }
}
