<?php

namespace App\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{

    /**
     * @Route("/",name="homepage",options={"expose"=true})
     */
    public function indexAction()
    {
        return $this->render('AppFrontBundle:Default:front.html.twig');
    }

    /**
     * @Route("/admin/maintenance/enable")
     */
    public function maintenanceEnableAction()
    {
        $driver = $this->get('lexik_maintenance.driver.factory')->getDriver();
        
        $message = $driver->getMessageLock($driver->lock());

        $this->get('session')->getFlashBag()->add('notice', $message);

        return $this->redirect($this->generateUrl('homepage'));
        
    }
    
    /**
     * @Route("/admin/maintenance/disable")
     */
    public function maintenanceDisableAction()
    {
        $driver = $this->get('lexik_maintenance.driver.factory')->getDriver();
        
        $message = $driver->getMessageUnLock($driver->unlock());

        $this->get('session')->getFlashBag()->add('info', $message);

        return $this->redirect($this->generateUrl('homepage'));
        
    }

}
