<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

final class HomeController
{
    public function __construct(
        private Environment $templating
    ) {
    }

    /**
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $response = new Response();
        $response->setContent(
            $this->templating->render('Home/home.html.twig')
        );

        return $response;
    }
}
