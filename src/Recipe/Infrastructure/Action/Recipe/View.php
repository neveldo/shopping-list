<?php

declare(strict_types=1);

namespace App\Recipe\Infrastructure\Action\Recipe;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final class View
{
    public function __construct(
        private Environment $templating
    ) {
    }

    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        $response = new Response();
        $response->setContent(
            $this->templating->render('Recipe/view.html.twig')
        );

        return $response;

    }
}
