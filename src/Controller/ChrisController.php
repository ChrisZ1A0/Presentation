<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChrisController extends AbstractController
{
    /**
     * @Route("/chris", name="app_chris")
     */
    public function index(): Response
    {
        return $this->render('chris/index.html.twig', [
            'controller_name' => 'ChrisController',
        ]);
    }
}
