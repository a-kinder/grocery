<?php

namespace Angela\Entities;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="Angela\Repositories\StoreRepository")
 * @ORM\Table(name="stores")
 **/
class Store
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
     * @ORM\OneToMany(targetEntity="ProductsStores", mappedBy="store")
     */
    protected $products;
}
