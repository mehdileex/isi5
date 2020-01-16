<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Product;
use Faker;


class Datagen extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
      $faker = \Faker\Factory::create();

        $faker->addProvider(new \Bezhanov\Faker\Provider\Device($faker));
        for ($i = 0; $i < 10; $i++) {
       $p= new Product();
       $img = new Image();
       $img->setName("41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg")->setLocation("http://localhost:8000/images/");
       echo $faker->deviceModelName ;
$p
    ->setTitle( $faker->deviceModelName)

    ->setPrice(99)
    ->setColor("black")->setRating(100)->setLikes(0)->setThumb("41396917_1727155157382224_3362013799883210752_n-5e19f3f562b64.jpeg")
 ->setQunatity(100)
    ->setDescription($faker->devicePlatform)
->addImage($img);

$manager->persist($p);
        }
        $manager->flush();
    }
}
