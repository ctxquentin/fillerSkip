<?php
namespace App\Controller;

use App\Entity\Filler;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FillerController extends AbstractController
{
    public function listFiller(){
        $fillers = [1,2,3,4];

        $response = new Response();
        $response->setContent(json_encode($fillers));
        $response->headers->set('Content-type', 'application/json');

        return $response;

    }

    public function insertFillerList(){

        $entityManager = $this->getDoctrine()->getManager();
        $fillerList = new Filler();
        $fillerList->setAnimeName('naruto');
        $fillerList->setEpisodes(json_encode([12,22,34,55]));

        $entityManager->persist($fillerList);

        $entityManager->flush();


    }


}