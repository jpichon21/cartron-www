<?php

namespace AppBundle\Repository;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityRepository;

/**
 * ResourceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ResourceRepository extends EntityRepository
{
    public function prevResourceFilteredForEnglish($position, $category)
    {
//            $resourceIdsIgnoredForEnglish = [763, 819, 795, 782, 700, 961, 962, 963, 964, 965, 966, 967, 968, 969, 970, 971, 972, 973, 974, 975, 976, 977, 978, 979, 980];
        $resourceIdsIgnoredForEnglish = [763, 819, 795, 782, 700];

        $qb = $this->createQueryBuilder('r')
            ->andWhere('r.position < :position')
            ->andWhere('r.category = :category')
            ->andWhere('r.id NOT IN (:ids)')
            ->orderBy('r.position', 'DESC')
            ->setMaxResults(1)
            ->setParameter('position', $position)
            ->setParameter('category', $category)
            ->setParameter('ids', $resourceIdsIgnoredForEnglish);

        return $qb->getQuery()->getOneOrNullResult();
    }

    public function nextResourceFilteredForEnglish($position, $category)
    {
//            $resourceIdsIgnoredForEnglish = [763, 819, 795, 782, 700, 961, 962, 963, 964, 965, 966, 967, 968, 969, 970, 971, 972, 973, 974, 975, 976, 977, 978, 979, 980];
        $resourceIdsIgnoredForEnglish = [763, 819, 795, 782, 700];

        $qb = $this->createQueryBuilder('r')
            ->andWhere('r.position > :position')
            ->andWhere('r.category = :category')
            ->andWhere('r.id NOT IN (:ids)')
            ->orderBy('r.position', 'ASC')
            ->setMaxResults(1)
            ->setParameter('position', $position)
            ->setParameter('category', $category)
            ->setParameter('ids', $resourceIdsIgnoredForEnglish);

        return $qb->getQuery()->getOneOrNullResult();
    }
}
