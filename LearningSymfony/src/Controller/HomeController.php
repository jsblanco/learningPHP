<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('home/register.html.twig', [
            'controller_name' => 'HomeController',
            'helloWorld' => 'Hello World, from Jorge on Symfony!'
        ]);
    }

    public function customRoute($name, $surname): Response
    {
        return $this->render('home/register.html.twig', [
            'controller_name' => 'HomeController',
            'helloWorld' => 'Welcome to the Adeptus Astartes, brother ' . ucfirst($name) . ' ' . ucfirst($surname),
            'heroes' => ['Primarch'=>'Fulgrim', 'Lord Commander'=> 'Eidolon', 'Apothecary'=>'Fabius Bile', 'Champion'=>'Lucius'],
            'units' => ['Intercessors', 'Infiltrators', 'Incursors', 'Aggressors', 'Hellblasters', 'Bladeguard', 'Eradicators']
        ]);
    }

    public function redirectToRoute(string $route, array $parameters = [], int $status = 302): RedirectResponse
    {
        return parent::redirectToRoute($route, $parameters, $status);
    }
}
