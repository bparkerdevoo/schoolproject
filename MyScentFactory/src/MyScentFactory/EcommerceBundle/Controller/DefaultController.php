<?php

namespace MyScentFactory\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $surname)
    {
        $ste = 'My Scent Factory';
        $picture = array('photo accueil', 'photo produit', 'photo composition');
        return $this->render('MyScentFactoryEcommerceBundle:Default:index.html.twig',
            ['name' => $name,
                'surname' => $surname,
                'societe'=> $ste,
                'photo'=>$picture]);
    }
}
