<?php

namespace MyScentFactory\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SubscribeController extends Controller
{
    /**
     * @Route("Inscription", name="subscribe")
     */
    public function subscribeAction()
    {
        return $this->render('MyScentFactoryEcommerceBundle:Subscribe:subscribe.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("Connexion")
     */
    public function loginAction()
    {
        return $this->render('MyScentFactoryEcommerceBundle:Subscribe:login.html.twig', array(
            // ...
        ));
    }

}
