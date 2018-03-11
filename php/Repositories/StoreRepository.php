<?php

namespace Angela\Repositories;

use Angela\Entities\Store;
use Doctrine\ORM\EntityRepository;

class StoreRepository extends EntityRepository
{
    /**
     * @param Store $store
     */
    public function persistStore(Store $store)
    {
        $em = $this->getEntityManager();
        $em->persist($store);
        $em->flush();
    }
}
