<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChrisController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('chris/index.html.twig', [
            'controller_name' => 'ChrisController',
        ]);
    }
    
    /**
     * @Route("CV", name="CV")
     */
    public function page2(): Response
    {
        return $this->render('chris/CV.html.twig', [
            'controller_name' => 'ChrisController',
        ]);
    }
    /**
     * @Route("loisirs", name="loisirs")
     */
    public function page6(): Response
    {
        return $this->render('chris/loisirs.html.twig', [
            'controller_name' => 'ChrisController',
        ]);
    }
    /**
     * @Route("portfolio", name="portfolio")
     */
    public function page3(): Response
    {
        return $this->render('chris/portfolio.html.twig', [
            'controller_name' => 'ChrisController',
        ]);
    }
    /**
     * @Route("contacts", name="contacts")
     */
    public function page4(): Response
    {
        return $this->render('chris/contacts.html.twig', [
            'controller_name' => 'ChrisController',
        ]);
    }
}
