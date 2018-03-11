<?php

namespace Angela\Repositories;

use Angela\Entities\Product;
use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    /**
     * @param Product $product
     */
    public function persistProduct(Product $product)
    {
        $em = $this->getEntityManager();
        $em->persist($product);
        $em->flush();
    }
}
