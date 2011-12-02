<?php

namespace AirOS\DashboardBundle\Controller;

use AirOS\DashboardBundle\Event\ControlCenterEvents;
use AirOS\DashboardBundle\Event\InitAdminDesktopEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session;

class DefaultController extends Controller
{
	protected $session;
	protected $event;
	protected $dispatcher;

    public function indexAction()
    {
    	$this->session = $this->getRequest()->getSession();
    	$this->event = new InitAdminDesktopEvent($this->session);
    	$this->dispatcher = $this->container->get('event_dispatcher');
    	$this->dispatcher->dispatch(ControlCenterEvents::InitAdminDesktop, $this->event);
        return new Response('<html><body>Hello World!'. $this->session->get('test2') .'</body></html>');
    }
}
?>