<?php

namespace Angela\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="Angela\Repositories\KeywordRepository")
 * @ORM\Table(name="keywords")
 **/
class Keyword
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * Many Keywords have Many Products.
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="keywords")
     * @ORM\JoinTable(name="keywords_products")
     */
    private $products;

    public function __construct() {
        $this->products = new ArrayCollection();
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
}
