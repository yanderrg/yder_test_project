<?php
/**
 * @package App\DataFixtures
 * @category DataFixtures
 */
namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see Fixture
 */
class ProductFixtures extends Fixture
{
    /**
     * @access public
     * @param ObjectManager $manager
     * @return void
     * @since 1.0
     * @see Product::class
     * @see ObjectManager::persist()
     * @see ObjectManager::flush()
     */
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 30; $i++) {
            $product = new Product();
            $product->setPrice(mt_rand(60, 200));

            $manager->persist($product);
        }
        $manager->flush();
    }
}
