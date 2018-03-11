<?php

namespace Angela\Repositories;

use Angela\Entities\Keyword;
use Doctrine\ORM\EntityRepository;

class KeywordRepository extends EntityRepository
{
    /**
     * @param Keyword $keyword
     */
    public function persistKeyword(Keyword $keyword)
    {
        $em = $this->getEntityManager();
        $em->persist($keyword);
        $em->flush();
    }
}
