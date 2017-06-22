<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PlayerController extends Controller
{
    /**
     * @Route("/player/{id}", name="player")
     */
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $r = $em->getRepository('AppBundle:Video');
        $video = $r->find($id);

        $hall = $video->getHall();

        $subscribersHall = $em->getRepository('AppBundle:SubscribersHalls')->findBy(array(
            'halls' => $hall
        ));

        $listComments = $em->getRepository('AppBundle:Comment')->findBy(array('video' => $video));
        $listTags = $em->getRepository('AppBundle:Tag')->findBy(array('video' => $video));
        return $this->render('AppBundle:Player:index.html.twig', array(
            'video' => $video,
            'listComments' => $listComments,
            'listTags' => $listTags,
            'hall' => $hall,
            'nbrSubscribers' => count($subscribersHall)
        ));
    }

}
