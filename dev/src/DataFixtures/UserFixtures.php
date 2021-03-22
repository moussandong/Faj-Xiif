<?php

namespace App\DataFixtures;

use App\Entity\Commerce;
use App\Entity\Produit;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = Factory::create("FR-fr");

        //Création des users
        for ($i = 0; $i < 30; $i++) {
            $commerce = new Commerce();

            $commerce->setNom("Chez $faker->firstName")
                ->setAdresse($faker->address)
                ->setTelephone($faker->numberBetween(700000, 999999))
                ->setNumeroSiret($faker->numberBetween(700000, 999999))
                ->setVille($faker->city)
                ->setCodePostal($faker->numberBetween(10000, 98000))
                ->setPays($faker->state)
                ->setDisponibilite(true)
            //->setImageSize($faker->numberBetween(1,5))
                ->setImageName("image");

            if ($i > 10) {
                $commerce->setNom("Chez $faker->firstName")
                    ->setAdresse($faker->address)
                    ->setTelephone($faker->numberBetween(700000, 999999))
                    ->setNumeroSiret($faker->numberBetween(700000, 999999))
                    ->setVille($faker->city)
                    ->setCodePostal($faker->numberBetween(10000, 98000))
                    ->setPays($faker->state)
                    ->setDisponibilite(true)
                    ->setImageName("image");

            } else if ($i > 20) {
                $commerce->setNom("Chez $faker->firstName")
                    ->setAdresse($faker->address)
                    ->setTelephone($faker->numberBetween(700000, 999999))
                    ->setNumeroSiret($faker->numberBetween(700000, 999999))
                    ->setVille($faker->city)
                    ->setCodePostal($faker->numberBetween(10000, 98000))
                    ->setPays($faker->state)
                    ->setDisponibilite(true)
                    ->setImageName("image");
            }

            $manager->persist($commerce);
        }

        //Création des users
        for ($i = 1; $i <= 240; $i++) {
            $produit = new Produit();

            if ($i < 48) {
                $produit->setNom("Menu")
                    ->setPrix($faker->numberBetween(5, 37))
                    ->setDescription($faker->sentence)
                    ->setImageName("image");
            } else if ($i < 48) {
                $produit->setNom("Plat")
                    ->setPrix($faker->numberBetween(5, 37))
                    ->setDescription($faker->sentence)
                    ->setImageName("image");
            } else if ($i < 96) {
                $produit->setNom("Dessert")
                    ->setPrix($faker->numberBetween(5, 37))
                    ->setDescription($faker->sentence)
                    ->setImageName("image");
            } else if ($i < 144) {
                $produit->setNom("Boisson")
                    ->setPrix($faker->numberBetween(5, 37))
                    ->setDescription($faker->sentence)
                    ->setImageName("image");
            } else if ($i < 192) {
                $produit->setNom("Supplément")
                    ->setPrix($faker->numberBetween(5, 37))
                    ->setDescription($faker->sentence)
                    ->setImageName("image");
            } else {
                $produit->setNom("autre")
                    ->setPrix($faker->numberBetween(5, 37))
                    ->setDescription($faker->sentence)
                    ->setImageName("image");
            }

            $manager->persist($produit);
        }
//Création des users
        for ($i = 0; $i < 30; $i++) {
            $user = new User();

            $user->setNom($faker->firstName)
                ->setPrenom($faker->lastName)
                ->setAdresse($faker->address)
                ->setTelephone($faker->numberBetween(0, 1))
                ->setVille($faker->city)
                ->setCodePostal($faker->numberBetween(10000, 98000))
                ->setPays($faker->state)
                ->setPassword($this->passwordEncoder->encodePassword($user, 'password'));
            if ($i == 0) {
                $user->setRoles(["ROLE_ADMIN"]);
                $user->setEmail("admin@guinot.fr");
            } else {
                $user->setRoles(["ROLE_USER"]);
                $user->setEmail("user$i@guinot.fr");
            }

            $manager->persist($user);
        }

        $manager->flush();

    }
}
