<?php

namespace AppBundle\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;
use AppBundle\Model\ParcelOrderInterface;
use AppBundle\Form\ParcelOrderType;
use AppBundle\Exception\InvalidFormException;
use AppBundle\Handler\ParcelOrderFormHandlerInterface;

class ParcelOrderFormHandler implements ParcelOrderFormHandlerInterface
{
 private $entityClass;
 private $repository;
 private $formFactory;
 private $formType;

 public function __construct(ObjectManager $om, $entityClass,FormFactoryInterface $formFactory, $formType)
 {
	 $this->entityClass = $entityClass;
	 $this->repository = $om->getRepository($this->entityClass);
	 $this->formFactory = $formFactory;
	 $this->formType = $formType;
 }

 public function post(array $parameters)
 {
	 $parcelorder = $this->createParcelOrder();
	 return $this->processForm($parcelorder, $parameters, 'POST');
 }

 public function put(ParcelOrderInterface $parcelorder, array $parameters)
 {
	 return $this->processForm($parcelorder, $parameters, 'PUT');
 }

 private function processForm(ParcelOrderInterface $parcelorder, array $parameters,$method = "PUT")
 {
	 $form = $this->formFactory->create($this->formType, $parcelorder, array('method' => $method));
	 $form->submit($parameters, 'PATCH' !== $method);
 	 if ($form->isValid()) 
	 {
 		$note = $form->getData();
		$this->repository->save($parcelorder);
		return $parcelorder;
 }
 throw new InvalidFormException('Invalid submitted data', $form);
 }

 private function createParcelOrder()
 {
 return new $this->entityClass();
 }
} 
