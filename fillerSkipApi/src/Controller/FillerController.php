<?php
namespace App\Controller;

use App\Entity\Filler;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FillerController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    /**
     * @Route("/filler/listfiller/{netflix_id}", name="list_filler")
     * @return Response
     */
    public function listFiller(string $netflix_id): Response{
        $fillerRepo = $this->em->getRepository(Filler::class);
        $fillers = $fillerRepo->findOneBy(['NetflixId' => $netflix_id]);
        $episodeList = $fillers->getEpisodes();

        $response = new Response();
        $response->setContent(json_encode(unserialize($episodeList)));
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