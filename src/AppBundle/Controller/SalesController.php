<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SalesController extends Controller
{
    public function submitTicketAction(Request $request): Response
    {
        [$name, $date, $description] = [
            $request->request->get('event_name'),
            $request->request->get('event_date'),
            $request->request->get('event_description'),
        ];

        var_dump($name, $date, $description);

        return $this->render('@App/Sales/submit_ticket.html.twig');
    }
}
