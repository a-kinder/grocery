<?php

namespace Angela\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Angela\Repositories\Repository")
 * @ORM\Table(name="products_stores")
 **/
class ProductsStores
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $id;

    /**
     * Many ProductStores have One Product.
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="stores")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $productId;

    /**
     * Many ProductStores have One Store.
     * @ORM\ManyToOne(targetEntity="Store", inversedBy="products")
     * @ORM\JoinColumn(name="store_id", referencedColumnName="id")
     */
    private $storeId;

    /**
     * @var integer price in cents (100 = $1)
     * @ORM\Column(type="integer")
     */
    private $price;
}
