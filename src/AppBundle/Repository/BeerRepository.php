<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Beer;
use Doctrine\ORM\EntityRepository;

class BeerRepository extends EntityRepository
{
    public function findAllOrderBy(array $orderBy = []): array
    {
        return $this->findBy([], $orderBy);
    }
}
