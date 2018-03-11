<?php

namespace Angela\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="Angela\Repositories\ProductdRepository")
 * @ORM\Table(name="products")
 **/
class Product
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

    // ...
    /**
     * Many Keywords have Many Products.
     * @ORM\ManyToMany(targetEntity="Keyword", mappedBy="products")
     */
    private $keywords;

    /**
     * @ORM\OneToMany(targetEntity="ProductsStores", mappedBy="product")
     */
    protected $stores;

    public function __construct() {
        $this->keywords = new ArrayCollection();
    }


    public function addKeyword(Keyword $keyword)
    {
        $keyword->addProduct($this); // synchronously updating inverse side
        $this->keywords[] = $keyword;
    }

}
