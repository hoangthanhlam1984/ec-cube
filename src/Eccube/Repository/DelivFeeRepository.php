<?php

namespace Eccube\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * DelivFeeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DelivFeeRepository extends EntityRepository
{
    public function findOrCreate(array $conditions)
    {
        $DelivFee = $this->findOneBy($conditions);

        if ($DelivFee instanceof \Eccube\Entity\DelivFee) {
            return $DelivFee;
        }

        $DelivFee = new \Eccube\Entity\DelivFee();
        $DelivFee
            ->setDelivId($conditions['deliv_id'])
            ->setPref($conditions['Pref'])
            ->setFeeId($conditions['Pref']->getId())
            ->setDeliv($conditions['Deliv'])
        ;

        return $DelivFee;
    }
}