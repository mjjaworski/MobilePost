<?php
	namespace AppBundle\Controller;
	
	use FOS\RestBundle\Controller\FOSRestController;
	
	class ParcelOrderController extends FOSRestController
	{
		public function getParcelordersAction()
		{
			$data =  $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')
				->findAll();
			$view = $this->view($data);
			return $this->handleView($view);
		}

		public function getParcelorderAction($id)
		{
			$data =  $this->getDoctrine()->getRepository('AppBundle:ParcelOrder')
				->find($id);
			$view = $this->view($data);
			return $this->handleView($view);

		}
	}