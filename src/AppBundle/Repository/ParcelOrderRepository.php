<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Model\ParcelOrderInterface;

class ParcelOrderRepository extends \Doctrine\ORM\EntityRepository
{
public function delete(ParcelOrderInterface $parcelorder) 
{
	$em = $this->getEntityManager();
	$em->remove($parcelorder);
	$em->flush();
}
public function save(ParcelOrderInterface $parcelorder) 
{
	$em = $this->getEntityManager();
	$em->persist($parcelorder);
	$em->flush();
}
}